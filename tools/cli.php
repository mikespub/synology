<?php

/**
 * This file provides a command line interface and menu to call
 * the Synology API.
 *
 * $ cli.php <api> <method> <params>
 *
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Synology\Applications\ClientFactory;
use Synology\Applications\GenericClient;

// use Symfony\Component\Console\Application;
//
// $application = new Application();
//
// ... register commands
//
// $application->run();
//
if (PHP_SAPI !== 'cli') {
    echo "This script is meant to run from commmand line\n";
    exit;
}

class ApiCommand
{
    public const API_NAMESPACE = 'SYNO';
    public const API_PATH = 'entry.cgi';

    public $api_host;
    public $api_port;
    public $api_http;
    protected $api_user;
    protected $api_pass;
    protected $api_list = [];
    protected $required = [];

    /**
     * Info API setup
     *
     * @param string $address
     * @param int    $port
     * @param string $username
     * @param string $password
     * @param string $protocol
     */
    public function __construct($address = null, $port = null, $username = null, $password = null, $protocol = null)
    {
        $this->api_host = $address ?? (getenv('API_HOST') ?: '192.168.10.5');
        $this->api_port = $port ?? (getenv('API_PORT') ?: 5001);
        $this->api_user = $username ?? (getenv('API_USER') ?: 'admin');
        $this->api_pass = $password ?? (getenv('API_PASS') ?: '*****');
        $this->api_http = $protocol ?? (($this->api_port === 5001) ? 'https' : 'http');
        $this->loadApiList();
    }

    public function loadApiList()
    {
        $tools_dir = dirname(__DIR__) . '/tools';
        $json_file = $tools_dir . '/combined.json';
        if (is_file($json_file)) {
            $contents = file_get_contents($json_file);
            $this->api_list = json_decode($contents, true);
            ksort($this->api_list);
        }
        $json_file = $tools_dir . '/required.json';
        if (is_file($json_file)) {
            $contents = file_get_contents($json_file);
            $this->required = json_decode($contents, true);
        }
    }

    public function showMenu($itemlist, $title = 'Select', $default = 1)
    {
        $idx = 1;
        $entries = [];
        echo "$title:\n";
        foreach ($itemlist as $item => $description) {
            $entries[$idx] = $item;
            if (!empty($description)) {
                echo "$idx: $item - $description\n";
            } else {
                echo "$idx: $item\n";
            }
            $idx += 1;
        }
        echo "0: Return\n";
        $input = readline("Select [$default]: ");
        if ($input === "") {
            $input = $default;
        }
        if (empty($input)) {
            return;
        }
        echo "You selected $title $input $entries[$input]\n\n";
        return $entries[$input];
    }

    public function selectService()
    {
        $services = [];
        foreach ($this->api_list as $root => $json) {
            $service = str_replace("SYNO.", "", $root);
            $services[$service] = "";
        }
        return $this->showMenu($services, "Service");
    }

    public function selectApi($service)
    {
        $root = "SYNO.$service";
        $json = $this->api_list[$root];
        ksort($json);
        $api_names = [];
        foreach ($json as $api_name => $values) {
            $version = $values['maxVersion'];
            $methods = $values['methods'][$version] ?? false;
            if (!$methods) {
                $version = $values['minVersion'];
                $methods = $values['methods'][$version] ?? [];
            }
            $api_names[$api_name] = implode(', ', $methods);
        }
        return $this->showMenu($api_names, "$service Api");
    }

    public function selectMethod($service, $api_name)
    {
        $root = "SYNO.$service";
        $json = $this->api_list[$root];
        $values = $json[$api_name];
        $version = $values['maxVersion'];
        $methods = $values['methods'][$version] ?? false;
        if (!$methods) {
            $version = $values['minVersion'];
            $methods = $values['methods'][$version] ?? [];
        }
        $params = [];
        if (array_key_exists($api_name, $this->required)) {
            foreach ($methods as $method) {
                if (array_key_exists($method, $this->required[$api_name])) {
                    $params[$method] = implode(', ', array_keys($this->required[$api_name][$method]));
                } else {
                    $params[$method] = "";
                }
            }
        } else {
            foreach ($methods as $method) {
                $params[$method] = "";
            }
        }
        return $this->showMenu($params, "$api_name Method");
    }

    public function askParams($api_name, $method)
    {
        $params = [];
        if (array_key_exists($api_name, $this->required)) {
            if (array_key_exists($method, $this->required[$api_name])) {
                $params = $this->required[$api_name][$method];
                echo "Required:", $api_name, $method, print_r($params, true);
            }
        }
        return $params;
    }

    public function parseParams($api_name, $method, $argv = null)
    {
        $params = [];
        if (!empty($argv)) {
            foreach ($argv as $arg) {
                [$key, $value] = explode('=', $arg);
                $params[$key] = $value;
            }
        }
        return $params;
    }

    public function runMethod($api_name, $method, $params = [])
    {
        return "Run $api_name $method " . str_replace("\n", "", var_export($params, true)) . "\n";
    }

    public function showResult($result)
    {
        $json_output = json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        echo "Result:\n";
        echo $json_output;
        echo "\n";
    }

    public function loop()
    {
        $service = $this->selectService();
        while (!empty($service)) {
            $api_name = $this->selectApi($service);
            while (!empty($api_name)) {
                $method = $this->selectMethod($service, $api_name);
                while (!empty($method)) {
                    $params = $this->askParams($api_name, $method);
                    $result = $this->runMethod($api_name, $method, $params);
                    $this->showResult($result);
                    $method = $this->selectMethod($service, $api_name);
                }
                $api_name = $this->selectApi($service);
            }
            $service = $this->selectService();
        }
    }

    public function showUsage()
    {
        echo "php cli.php                                                     Show menu\n";
        echo "php cli.php [SYNO.]ServiceName.ApiName method param1=value1 ... Run API\n";
    }

    public function cli($argv)
    {
        $script = array_shift($argv);
        if (count($argv) > 0) {
            $api_name = array_shift($argv);
            $pieces = explode('.', $api_name);
            if ($pieces[0] !== "SYNO") {
                array_unshift($pieces, "SYNO");
            }
            $service = $pieces[1];
            $root = "SYNO.$service";
            if (!array_key_exists($root, $this->api_list)) {
                echo "Unknown Service $pieces[1]\n";
                return $this->showUsage();
            }
            $api_name = implode('.', $pieces);
            if (!array_key_exists($api_name, $this->api_list[$root])) {
                echo "Unknown Api $api_name\n";
                return $this->showUsage();
            }
            $method = array_shift($argv);
            echo $api_name, $method, print_r($argv, true);
            $params = $this->parseParams($api_name, $method, $argv);
            $result = $this->runMethod($api_name, $method, $params);
            $this->showResult($result);
        } else {
            $this->loop();
        }
    }
}

$command = new ApiCommand();
$command->cli($argv);
