<?php

namespace Synology\Tools;

use Synology\Exception;

/**
 * Summary of TestApi
 */
class TestApi
{
    use ConfigFiles;

    /**
     * This method tries to call the 'getinfo', 'list' or 'get' method for
     * every API defined in combined.json. Results are matched against a
     * schema if available, and errors are saved for evaluation
     * @param string $filter
     * @return void
     */
    public function runTest($filter = '')
    {
        foreach ($this->apilist as $root => $json) {
            if (!empty($filter) && !str_contains($root, $filter)) {
                continue;
            }
            echo "$root\n";
            ksort($json);
            foreach ($json as $api => $values) {
                $this->testApiValues($root, $api, $values);
            }
        }
    }

    /**
     * Summary of testApiValues
     * @param string $root
     * @param string $api
     * @param array<string, mixed> $values
     * @return void
     */
    public function testApiValues($root, $api, $values)
    {
        $version = $values['maxVersion'];
        $methods = $values['methods'][$version] ?? false;
        if (!$methods) {
            $version = $values['minVersion'];
            $methods = $values['methods'][$version] ?? [];
        }
        $path = $values['path'] ?? '';
        $format = $values['requestFormat'] ?? '';
        echo "\t$api\n";
        foreach ($methods as $method) {
            if (!empty($path)) {
                echo "\t\t$method\n";
            } else {
                echo "\t\t$method (?)\n";
            }
        }
        if (empty($path)) {
            return;
        }
        $todo = $this->getTodoMethods($api, $methods);
        foreach ($todo as $method) {
            $this->testApiMethod($root, $api, $method, $version, $path, $format);
        }
    }

    /**
     * Summary of getTodoMethods
     * @param string $api
     * @param array<string> $methods
     * @return array<string>
     */
    public function getTodoMethods($api, $methods)
    {
        $todo = [];
        if (in_array('getinfo', $methods)) {
            $todo[] = 'getinfo';
        }
        if (in_array('list', $methods)) {
            $todo[] = 'list';
        } elseif (in_array('get', $methods)) {
            $todo[] = 'get';
        } elseif ($api == 'SYNO.API.Info' && in_array('query', $methods)) {
            $todo[] = 'query';
        }
        // add methods where required params are defined
        if (empty($this->required[$api])) {
            return $todo;
        }
        foreach ($this->required[$api] as $method => $params) {
            // skip methods with dummy 'required' values
            if (in_array('required', $params, true)) {
                continue;
            }
            if (!in_array($method, $todo)) {
                $todo[] = $method;
            }
        }
        return $todo;
    }

    /**
     * Summary of testApiMethod
     * @param string $root
     * @param string $api
     * @param string $method
     * @param int $version
     * @param string $path
     * @param string $format
     * @return bool|never
     */
    public function testApiMethod($root, $api, $method, $version = 1, $path = 'entry.cgi', $format = '')
    {
        $resultFile = $this->getResultFile($api, $method);
        if (file_exists($resultFile)) {
            $schemaFile = $this->getSchemaFile($api, $method);
            try {
                return $this->validateResultFile($resultFile, $schemaFile);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
        $errorFile = $this->getErrorFile($api, $method);
        if (file_exists($errorFile)) {
            return false;
        }
        $service = str_replace("SYNO.", "", $root);
        $synology = $this->getGenericClient($service, $version);
        $type = str_replace("$root.", '', $api);
        if ($type === $root) {
            $type = '';
        }
        $params = $this->getRequiredParams($api, $method, $format);
        if (!empty($params)) {
            echo "Required:", $api, $method, print_r($params, true);
        }
        try {
            $result = $synology->call($type, $path, $method, $params, $version);
        } catch (Exception $e) {
            $result = (object) ["error" => ["code" => $e->getCode(), "message" => $e->getMessage()]];
        }
        $output = json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        if (is_object($result) && property_exists($result, 'error')) {
            file_put_contents($errorFile, $output);
            return false;
        }
        file_put_contents($resultFile, $output);
        return true;
    }

    /**
     * Summary of validateResultFile
     * @param string $resultFile
     * @param string $schemaFile
     * @throws Exception
     * @return bool
     */
    public function validateResultFile($resultFile, $schemaFile)
    {
        if (!file_exists($resultFile) || !file_exists($schemaFile)) {
            return false;
        }
        $data = json_decode(file_get_contents($resultFile));

        // Validate
        $validator = new \JsonSchema\Validator();
        try {
            $validator->validate($data, (object) ['$ref' => 'file://' . realpath($schemaFile)]);
        } catch (\JsonSchema\Exception\JsonDecodingException $e) {
            echo "JSON Error: " . $e->getMessage() . "\n";
            echo "Schema: $schemaFile\n";
            throw new Exception('Invalid schema file');
        }

        if ($validator->isValid()) {
            echo "The supplied JSON validates against the schema.\n";
            return true;
        }
        echo "JSON does not validate. Violations:\n";
        $nullable = false;
        foreach ($validator->getErrors() as $error) {
            printf("[%s] %s\n", $error['property'], $error['message']);
            if (str_contains($error['message'], 'NULL value found, but an object is required')) {
                $nullable = true;
            }
        }
        echo "Schema: $schemaFile\n";
        if (!$nullable) {
            throw new Exception('Invalid result file');
        }
        return false;
    }
}
