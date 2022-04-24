<?php
/**
 * This file tries to call the 'getinfo', 'list' or 'get' method for
 * every API defined in combined.json. Results are matched against a
 * schema if available, and errors are saved for evaluation
 *
 * $ composer require --dev justinrainbow/json-schema
 *
 */
require dirname(__DIR__) . '/vendor/autoload.php';

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

$api_host = getenv('API_HOST') ?: '192.168.10.5';
$api_port = getenv('API_PORT') ?: 5001;
$api_user = getenv('API_USER') ?: 'admin';
$api_pass = getenv('API_PASS') ?: '*****';
$api_http = ($api_port === 5001) ? 'https' : 'http';

$tools_dir = dirname(__DIR__) . '/tools';

$api_list = [];
$json_file = $tools_dir . '/combined.json';
if (is_file($json_file)) {
    $contents = file_get_contents($json_file);
    $api_list = json_decode($contents, true);
    ksort($api_list);
}

$required = [];
$json_file = $tools_dir . '/required.json';
if (is_file($json_file)) {
    $contents = file_get_contents($json_file);
    $required = json_decode($contents, true);
}

foreach ($api_list as $root => $json) {
    echo "$root\n";
    $service = str_replace("SYNO.", "", $root);
    //$synology = ClientFactory::getClient($service, $api_host, $api_port, $api_http);
    ksort($json);
    foreach ($json as $api_name => $values) {
        $version = $values['maxVersion'];
        $methods = $values['methods'][$version];
        if (!$methods) {
            $version = $values['minVersion'];
            $methods = $values['methods'][$version];
        }
        echo "\t$api_name\n";
        //$synology = ClientFactory::getClient($service, $api_host, $api_port, $api_http, $version);
        $todo = [];
        foreach ($methods as $method) {
            if (!empty($values['path'])) {
                echo "\t\t$method\n";
            } else {
                echo "\t\t$method (?)\n";
            }
        }
        if (in_array('getinfo', $methods)) {
            $todo[] = 'getinfo';
        }
        if (in_array('list', $methods)) {
            $todo[] = 'list';
        } elseif (in_array('get', $methods)) {
            $todo[] = 'get';
        }
        foreach ($todo as $method) {
            //$synology = ClientFactory::getClient($service, $api_host, $api_port, $api_http, $version);
            $synology = ClientFactory::getGeneric($service, $api_host, $api_port, $api_http, $version);
            if (!is_a($synology, GenericClient::class)) {
                continue;
            }
            $result_file = $tools_dir . '/results/' . $api_name . '-' . $method . '.json';
            $error_file = str_replace('/results/', '/errors/', $result_file);
            $schema_file = str_replace('/results/', '/schemas/', $result_file);
            if (file_exists($result_file)) {
                //$json_output = file_get_contents($result_file);
                //$result = json_decode($json_output);
                //if (is_object($result) && property_exists($result, 'error')) {
                //    rename($result_file, $error_file);
                //}
                if (file_exists($schema_file)) {
                    $data = json_decode(file_get_contents($result_file));

                    // Validate
                    $validator = new JsonSchema\Validator();
                    $validator->validate($data, (object)['$ref' => 'file://' . realpath($schema_file)]);

                    if ($validator->isValid()) {
                        echo "The supplied JSON validates against the schema.\n";
                    } else {
                        echo "JSON does not validate. Violations:\n";
                        foreach ($validator->getErrors() as $error) {
                            printf("[%s] %s\n", $error['property'], $error['message']);
                        }
                        exit;
                    }
                }
                continue;
            }
            if (file_exists($error_file)) {
                continue;
            }
            $synology->connect($api_user, $api_pass);
            //$synology->activateDebug();
            $type = str_replace("$root.", '', $api_name);
            if ($type === $root) {
                $type = '';
            }
            $params = [];
            if (array_key_exists($api_name, $required)) {
                if (array_key_exists($method, $required[$api_name])) {
                    $params = $required[$api_name][$method];
                    echo "Required:", $api_name, $method, print_r($params, true);
                }
            }
            try {
                $result = $synology->call($type, $values['path'], $method, $params, $version);
            } catch (Exception $e) {
                $result = (object) ["error" => ["code" => $e->getCode(), "message" => $e->getMessage()]];
            }
            $json_output = json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            if (is_object($result) && property_exists($result, 'error')) {
                file_put_contents($error_file, $json_output);
            } else {
                file_put_contents($result_file, $json_output);
            }
        }
    }
}
