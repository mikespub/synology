<?php

namespace Synology;

use Synology\Applications\ClientFactory;
use Synology\Tools\ConfigFiles;

/**
 * Class Cli
 *
 * @package Synology
 */
class Cli
{
    use ConfigFiles;

    public const API_NAMESPACE = 'SYNO';

    /**
     * Summary of showMenu
     * @param array<string, string> $itemlist
     * @param string $title
     * @param mixed $default
     * @return string|null
     */
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
            return null;
        }
        echo "You selected $title $input $entries[$input]\n\n";
        return $entries[$input];
    }

    /**
     * Summary of selectService
     * @return string|null
     */
    public function selectService()
    {
        $services = [];
        $prefix = static::API_NAMESPACE . '.';
        foreach ($this->apilist as $root => $json) {
            $service = str_replace($prefix, "", $root);
            $services[$service] = "";
        }
        return $this->showMenu($services, "Service");
    }

    /**
     * Summary of selectApi
     * @param string $service
     * @return string|null
     */
    public function selectApi($service)
    {
        $root = static::API_NAMESPACE . '.' . $service;
        $json = $this->apilist[$root];
        ksort($json);
        $apis = [];
        foreach ($json as $api => $values) {
            $version = $values['maxVersion'];
            $methods = $values['methods'][$version] ?? false;
            if (!$methods) {
                $version = $values['minVersion'];
                $methods = $values['methods'][$version] ?? [];
            }
            $apis[$api] = implode(', ', $methods);
        }
        return $this->showMenu($apis, "$service Api");
    }

    /**
     * Summary of selectMethod
     * @param string $service
     * @param string $api
     * @return string|null
     */
    public function selectMethod($service, $api)
    {
        $root = static::API_NAMESPACE . '.' . $service;
        $json = $this->apilist[$root];
        $values = $json[$api];
        $version = $values['maxVersion'];
        $methods = $values['methods'][$version] ?? false;
        if (!$methods) {
            $version = $values['minVersion'];
            $methods = $values['methods'][$version] ?? [];
        }
        $params = [];
        if (array_key_exists($api, $this->required)) {
            foreach ($methods as $method) {
                if (array_key_exists($method, $this->required[$api])) {
                    $params[$method] = implode(', ', array_keys($this->required[$api][$method]));
                } else {
                    $params[$method] = "";
                }
            }
        } else {
            foreach ($methods as $method) {
                $params[$method] = "";
            }
        }
        return $this->showMenu($params, "$api Method");
    }

    /**
     * Summary of askParams
     * @param string $api
     * @param string $method
     * @return array<string, mixed>
     */
    public function askParams($api, $method)
    {
        $params = [];
        if (array_key_exists($api, $this->required)) {
            if (array_key_exists($method, $this->required[$api])) {
                $params = $this->required[$api][$method];
                echo "Required:", $api, $method, print_r($params, true);
            }
        }
        return $params;
    }

    /**
     * Summary of parseParams
     * @param string $api
     * @param string $method
     * @param ?array<string> $argv
     * @return array<string, mixed>
     */
    public function parseParams($api, $method, $argv = null)
    {
        $params = $this->askParams($api, $method);
        if (!empty($argv)) {
            foreach ($argv as $arg) {
                [$key, $value] = explode('=', $arg);
                $params[$key] = $value;
            }
        }
        return $params;
    }

    /**
     * Summary of findMethod
     * @param string $service
     * @param string $api
     * @param string $method
     * @return array{0: string, 1: int}
     */
    public function findMethod($service, $api, $method)
    {
        $root = static::API_NAMESPACE . '.' . $service;
        $json = $this->apilist[$root];
        $values = $json[$api];
        $version = $values['maxVersion'];
        $methods = $values['methods'][$version] ?? false;
        if (!$methods) {
            $version = $values['minVersion'];
            $methods = $values['methods'][$version] ?? [];
        }
        if (!in_array($method, $methods)) {
            echo "Unknown Api Method $api $method\n";
            return ['', 0];
        }
        return [$values['path'], $version];
    }

    /**
     * Summary of runMethod
     * @param string $api
     * @param string $method
     * @param array<string, mixed> $params
     * @return array<mixed>|string|bool|\stdClass
     */
    public function runMethod($api, $method, $params = [])
    {
        [$namespace, $service, $type] = explode('.', $api, 3);
        [$path, $version] = $this->findMethod($service, $api, $method);
        if (empty($path) || empty($version)) {
            return "Run $api $method " . str_replace("\n", "", var_export($params, true)) . "\n";
        }
        $client = ClientFactory::getGeneric($service, $this->host, $this->port, $this->http);
        if ($api == 'SYNO.API.Info' && $method == 'query') {
            // no authentication needed
        } else {
            $client->connect($this->user, $this->pass);
        }
        $result = $client->call($type, $path, $method, $params, $version);
        return $result;
    }

    /**
     * Summary of showResult
     * @param mixed $result
     * @return void
     */
    public function showResult($result)
    {
        $output = json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        echo "Result:\n";
        echo $output;
        echo "\n";
    }

    /**
     * Summary of loop
     * @param ?string $service
     * @param ?string $api
     * @return void
     */
    public function loop($service = null, $api = null)
    {
        $service ??= $this->selectService();
        while (!empty($service)) {
            $api ??= $this->selectApi($service);
            while (!empty($api)) {
                $method = $this->selectMethod($service, $api);
                while (!empty($method)) {
                    $params = $this->askParams($api, $method);
                    $result = $this->runMethod($api, $method, $params);
                    $this->showResult($result);
                    $method = $this->selectMethod($service, $api);
                }
                $api = $this->selectApi($service);
            }
            $service = $this->selectService();
        }
    }

    /**
     * Summary of showUsage
     * @return void
     */
    public function showUsage()
    {
        echo "php cli.php                                                     Show menu\n";
        echo "php cli.php [SYNO.]ServiceName.ApiName method param1=value1 ... Run API\n";
    }

    /**
     * Summary of cli
     * @param array<string> $argv
     * @return void
     */
    public function cli($argv)
    {
        // remove script from $argv
        array_shift($argv);
        if (count($argv) > 0) {
            $api = array_shift($argv);
            $pieces = explode('.', $api);
            if ($pieces[0] !== static::API_NAMESPACE) {
                array_unshift($pieces, static::API_NAMESPACE);
            }
            $service = $pieces[1];
            $root = static::API_NAMESPACE . '.' . $service;
            if (!array_key_exists($root, $this->apilist)) {
                echo "Unknown Service $pieces[1]\n";
                $this->loop();
                return;
            }
            $api = implode('.', $pieces);
            if (!array_key_exists($api, $this->apilist[$root])) {
                echo "Unknown Api $api\n";
                $this->loop($service);
                return;
            }
            $method = array_shift($argv);
            if (empty($method)) {
                $this->loop($service, $api);
                return;
            }
            echo $api, $method, print_r($argv, true);
            $params = $this->parseParams($api, $method, $argv);
            $result = $this->runMethod($api, $method, $params);
            $this->showResult($result);
        } else {
            $this->loop();
        }
    }
}
