<?php

namespace Synology\Tools;

/**
 * Summary of Generator
 */
class Generator
{
    use ConfigFiles;
    use Templates;

    protected const QUERY_FILE = 'query.json';

    /**
     * Summary of generateOpenAPI
     * @param ?string $basedir
     * @return void
     */
    public function generateOpenAPI($basedir = null)
    {
        $basedir ??= $this->tools;
        // if running on the Synology, this should be enough to start
        //$host = $this->getIpAddress();
        $host = 'diskstation';
        // if running elsewhere, please adapt manually
        //$host = '192.168.x.x';

        $http = 'http';
        if ($http == 'http') {
            $port = 5000;
        } else {
            $port = 5001;
        }

        $header_tmpl = $this->loadTemplate('header');
        $path_api_tmpl = $this->loadTemplate('path_api');
        $path_method_tmpl = $this->loadTemplate('path_method');
        $query_api_tmpl = $this->loadTemplate('query_api');
        $query_path_tmpl = $this->loadTemplate('query_path');
        $footer_tmpl = $this->loadTemplate('components');
        $rest_header_tmpl = $this->loadTemplate('rest_header');
        $rest_api_tmpl = $this->loadTemplate('rest_api');
        $rest_method_tmpl = $this->loadTemplate('rest_method');
        $rest_param_tmpl = $this->loadTemplate('rest_param');
        $rest_footer_tmpl = $this->loadTemplate('rest_components');
        $schema_tmpl = $this->loadTemplate('schema');

        $params = [];
        $params['host'] = $host;
        $params['port'] = $port;
        $params['http'] = $http;
        $params['location'] = 'path';
        $path_output = $this->replaceParams($header_tmpl, $params);
        $path_output .= $path_api_tmpl;
        $path_footer = $this->replaceParams($footer_tmpl, $params);
        $params['location'] = 'query';
        $query_output = $this->replaceParams($header_tmpl, $params);
        $query_output .= $query_api_tmpl;
        $query_footer = $this->replaceParams($footer_tmpl, $params);

        $api2url = [];
        foreach ($this->apilist as $root => $json) {
            echo $root . "\n";
            $params = [];
            $params['host'] = $host;
            $params['port'] = $port;
            $params['http'] = $http;
            $params['location'] = 'query';
            $rest_output = $this->replaceParams($rest_header_tmpl, $params);
            $rest_output .= $this->replaceParams($rest_api_tmpl, $params);
            $rest_footer = $this->replaceParams($rest_footer_tmpl, $params);
            foreach ($json as $api => $values) {
                $params = [];
                $params['api'] = $api;
                echo "\t" . $api . "\n";
                $params['tag'] = explode('.', $api)[1];
                $params['tag2'] = explode('.', $api)[2] ?? '';
                foreach ($values as $idx => $val) {
                    if (is_array($val)) {
                        echo "\t\t" . $idx . ":" . json_encode($val) . "\n";
                    } else {
                        echo "\t\t" . $idx . ":" . $val . "\n";
                    }
                }
                $path = $values['path'];
                // dirty hack for relative PhotoStation URIs - this uses a PHP session id to authenticate?
                if ($params['tag'] == 'PhotoStation' && strpos($path, '/') === false) {
                    $path = 'photo/webapi/' . $path;
                }
                $api2url[$api] = $path;
                $params['path'] = $path;
                if (!empty($values['lib'])) {
                    $params['lib'] = $values['lib'];
                }
                $params['version'] = $values['maxVersion'];
                $methods = $values['methods'][$params['version']] ?? false;
                if (!$methods) {
                    $params['version'] = $values['minVersion'];
                    $methods = $values['methods'][$values['minVersion']] ?? [];
                }
                $params['format'] = $values['requestFormat'] ?? false;
                echo "\t\t(" . count($methods) . ") " . implode(',', $methods) . "\n";
                $params['hash'] = '';
                if (in_array('list', $methods)) {
                    $params['default'] = 'list';
                } elseif (in_array('getinfo', $methods)) {
                    $params['default'] = 'getinfo';
                } elseif (in_array('getconfig', $methods)) {
                    $params['default'] = 'getconfig';
                } elseif (count($methods) == 1) {
                    $params['default'] = $methods[0];
                } else {
                    $params['default'] = '???';
                    $params['hash'] = '#';
                }
                $params['methodlist'] = implode(', ', $methods);
                $params['api2'] = implode('_', array_slice(explode('.', $api), 2));
                $query_output .= $this->replaceParams($query_path_tmpl, $params);
                foreach ($methods as $method) {
                    $params['method'] = $method;
                    // find out if we have a specific schema file for this api method
                    $schema_file = $this->getSchemaFile($api, $method);
                    if (file_exists($schema_file)) {
                        $params['schema'] = str_replace('SYNO.', '', $api) . '_' . ucfirst($method) . 'Response';
                        // schemas including type: array without items causes problems for Swagger UI - use "items": {} to support any type
                        $params['file'] = basename($schema_file);
                        $path_footer .= $this->replaceParams($schema_tmpl, $params);
                        $rest_footer .= $this->replaceParams($schema_tmpl, $params);
                        $query_footer .= $this->replaceParams($schema_tmpl, $params);
                    } else {
                        $params['schema'] = 'NormalResponse';
                    }
                    $path_output .= $this->replaceParams($path_method_tmpl, $params);
                    if ($api == 'SYNO.API.Info' && $method == 'query') {
                        continue;
                    }
                    $rest_output .= $this->replaceParams($rest_method_tmpl, $params);
                    if (empty($this->required[$api]) || empty($this->required[$api][$method])) {
                        continue;
                    }
                    // add required params
                    $rest_output .= "      parameters:\n";
                    foreach ($this->required[$api][$method] as $name => $value) {
                        if (!empty($params['format']) && $params['format'] == "JSON") {
                            if (is_array($value) || is_null($value) || is_bool($value)) {
                                $value = "'" . json_encode($value, JSON_UNESCAPED_SLASHES) . "'";
                            }
                        }
                        $path_output .= $this->replaceParams($rest_param_tmpl, ['name' => $name, 'value' => $value]);
                        $rest_output .= $this->replaceParams($rest_param_tmpl, ['name' => $name, 'value' => $value]);
                    }
                }
            }
            $rest_output .= $rest_footer;
            $service = explode('.', $root)[1];
            $rest_file = $basedir . static::OPENAPI_DIR . $service . '.yaml';
            file_put_contents($rest_file, $rest_output);
            echo 'Generated ' . $rest_file . "\n";
        }

        $path_output .= $path_footer;
        $path_file = $basedir . static::OPENAPI_DIR . 'path.yaml';
        file_put_contents($path_file, $path_output);
        echo 'Generated ' . $path_file . "\n";

        $query_output .= $query_footer;
        $query_file = $basedir . static::OPENAPI_DIR . 'query.yaml';
        file_put_contents($query_file, $query_output);
        echo 'Generated ' . $query_file . "\n";

        $map_file = $basedir . '/rest_mapping.php';
        $map_output = '<?php

const API_PATH = \'entry.cgi\';
$api2url = [];
';
        foreach ($api2url as $api => $path) {
            if ($path == 'entry.cgi') {
                $map_output .= "\$api2url['$api'] = API_PATH;\n";
            } else {
                $map_output .= "\$api2url['$api'] = '$path';\n";
            }
        }
        $map_output .= "\nreturn \$api2url;\n";
        file_put_contents($map_file, $map_output);
        echo 'Generated ' . $map_file . "\n";
    }

    /**
     * Summary of getIpAddress
     * @return string
     */
    public function getIpAddress()
    {
        $hostname = gethostname();
        echo $hostname;
        $ip = gethostbyname($hostname);
        echo $ip;
        if ($ip != $hostname) {
            return $ip;
        }
        return 'diskstation';
    }

    /**
     * Summary of checkRequiredErrors
     * {
     *     "error": {
     *         "code": 120,
     *         "errors": {
     *             "name": "node",
     *             "reason": "required"
     *         }
     *     },
     *     "success": false
     * }
     * @param ?string $basedir
     * @param ?array<string, mixed> $required
     * @return array<string, mixed>
     */
    public function checkRequiredErrors($basedir = null, $required = null)
    {
        $basedir ??= $this->tools . static::ERRORS_DIR;
        $required ??= $this->required;
        $files = scandir($basedir);
        foreach ($files as $file) {
            $filepath = $basedir . $file;
            if (!is_file($filepath)) {
                continue;
            }
            $contents = file_get_contents($filepath);
            if (!str_contains($contents, 'required')) {
                continue;
            }
            $json = json_decode($contents, true);
            if (empty($json) || empty($json['error']) || empty($json['error']['code'])) {
                echo $file . "\n";
                continue;
            }
            if ($json['error']['code'] != 120) {
                echo $file . ' ' . $json['error']['code'] . "\n";
                continue;
            }
            [$api_name, $method] = explode('-', str_replace('.json', '', $file));
            $name = $json['error']['errors']['name'];
            $required[$api_name] ??= [];
            $required[$api_name][$method] ??= [];
            if (isset($required[$api_name][$method][$name])) {
                echo $api_name . ' ' . $method . ' ' . $name . '=' . $required[$api_name][$method][$name] . "\n";
            } else {
                echo $api_name . ' ' . $method . ' ' . $name . "\n";
                $required[$api_name][$method][$name] = 'required';
            }
        }
        return $required;
    }

    /**
     * Summary of combineJsonFiles
     * @param string $basedir dirname(__DIR__, 3) . '/docs'
     * @return void
     */
    public function combineJsonFiles($basedir)
    {
        // Get current paths from SYNO.API.Info
        $auth = $this->getQueryFile($this->tools);

        // Load API json files from ../docs directory
        $dir = rtrim($basedir, '/');
        $files = scandir($dir);
        $apilist = [];
        foreach ($files as $file) {
            // skip API file itself
            //if ($file == 'API.json' || $file == 'query.api') {
            //    continue;
            //}
            $filepath = $dir . '/' . $file;
            if (!is_file($filepath)) {
                continue;
            }
            echo $file . "\n";
            $contents = file_get_contents($filepath);
            $json = json_decode($contents, true);
            if (empty($json)) {
                continue;
            }
            foreach ($json as $api => $values) {
                $values = $this->cleanApiValues($values);
                if (strpos($api, 'PhotoStation') === false) {
                    $values = $this->mergeApiValues($api, $values, $auth, $file);
                    if (empty($values)) {
                        continue;
                    }
                }
                $root = implode('.', array_slice(explode('.', $api), 0, 2));
                if (!empty($apilist[$root]) && !empty($apilist[$root][$api])) {
                    echo "Already seen $api\n";
                    $apilist[$root][$api] = array_merge($apilist[$root][$api], $values);
                    continue;
                }
                $apilist[$root] ??= [];
                if ($auth[$api]) {
                    $apilist[$root][$api] = array_merge($values, $auth[$api]);
                } else {
                    $apilist[$root][$api] = $values;
                }
            }
        }
        $this->saveApiListFile($this->tools, $apilist);

        $this->saveApiServiceFiles($basedir, $apilist);
    }

    /**
     * Summary of getQueryFile
     * @param ?string $basedir
     * @return array<string, mixed>
     */
    public function getQueryFile($basedir = null)
    {
        $basedir ??= $this->tools;
        // Get current paths from SYNO.API.Info
        // http://192.168.x.x/rest.php/SYNO.API.Info/v1/query
        // http://localhost:5000/webapi/query.cgi?api=SYNO.API.Info&version=1&method=query&query=ALL
        $filepath = $basedir . '/' . static::QUERY_FILE;
        $auth = [];
        if (is_file($filepath)) {
            $contents = file_get_contents($filepath);
            $json = json_decode($contents, true);
            if (!$json) {
                echo json_last_error();
                exit;
            }
            foreach ($json['data'] as $key => $values) {
                echo $key . ' ' . $values['maxVersion'] . ' ' . $values['path'] . "\n";
                $auth[$key] = $values;
            }
        }
        return $auth;
    }

    /**
     * Summary of cleanApiValues
     * @param array<string, mixed> $values
     * @return array<string, mixed>
     */
    public function cleanApiValues($values)
    {
        $getvars = ['maxVersion', 'minVersion', 'path', 'requestFormat', 'methods', 'lib'];
        $cleaned = [];
        foreach ($values as $key => $val) {
            if (in_array($key, $getvars)) {
                $cleaned[$key] = $val;
            }
        }
        if (empty($cleaned['methods'])) {
            return $cleaned;
        }
        foreach ($cleaned['methods'] as $idx => $methods) {
            $methodlist = [];
            foreach ($methods as $method) {
                if (is_string($method)) {
                    array_push($methodlist, $method);
                } else {
                    // CHECKME: get the array of keys, and pick the first one
                    $method = array_keys($method)[0];
                    array_push($methodlist, $method);
                }
            }
            // Core.MediaIndex has duplicate get & set methods
            //$cleaned['methods'][$idx] = $methodlist;
            $cleaned['methods'][$idx] = array_unique($methodlist);
        }
        return $cleaned;
    }

    /**
     * Summary of mergeApiValues
     * @param string $api
     * @param array<string, mixed> $values
     * @param array<string, mixed> $auth
     * @param string $file
     * @return array<string, mixed>
     */
    public function mergeApiValues($api, $values, $auth, $file)
    {
        if (empty($auth[$api])) {
            echo "Unknown api $api\n";
            exit;
            if (empty($values['path'])) {
                $values['path'] = 'entry.cgi';
                if (empty($values['requestFormat'])) {
                    $values['requestFormat'] = 'JSON';
                }
            }
        } else {
            if (!empty($values['path']) && $values['path'] != $auth[$api]['path']) {
                echo "Invalid path " . $values['path'] . " for api $api in $file\n";
                $values['path'] = $auth[$api]['path'];
            }
            if (!empty($values['maxVersion']) && $values['maxVersion'] != $auth[$api]['maxVersion']) {
                echo "Invalid maxVersion " . $values['maxVersion'] . " for api $api in $file\n";
                exit;
            }
        }
        return $values;
    }

    /**
     * Summary of saveApiListFile
     * @param string $basedir
     * @param array<string, mixed> $apilist
     * @return void
     */
    public function saveApiListFile($basedir, $apilist)
    {
        ksort($apilist);
        $output = json_encode($apilist, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $filepath = $basedir . '/' . static::COMBINED_FILE;
        file_put_contents($filepath, $output);
        echo 'Generated ' . $filepath . "\n";
    }

    /**
     * Summary of saveApiServiceFiles
     * @param string $basedir
     * @param array<string, mixed> $apilist
     * @return void
     */
    public function saveApiServiceFiles($basedir, $apilist)
    {
        $basedir = rtrim($basedir, '/');
        foreach ($apilist as $root => $json) {
            ksort($json);
            $output = json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            $service = explode('.', $root)[1];
            $filepath = $basedir . '/' . $service . static::JSON_EXTENSION;
            file_put_contents($filepath, $output);
            echo 'Generated ' . $filepath . "\n";
        }
    }

    /**
     * Summary of mergeQueryFiles
     * @param ?string $basedir
     * @return void
     */
    public function mergeQueryFiles($basedir = null)
    {
        $basedir ??= $this->tools;
        $files = [];
        $files['old'] = $basedir . '/query.old.json';
        $files['cur'] = $basedir . '/query.cur.json';
        $files['new'] = $basedir . '/query.new.json';
        $json = [];
        foreach ($files as $key => $filepath) {
            $contents = file_get_contents($filepath);
            $json[$key] = json_decode($contents, true);
        }
        $files['tmp'] = $basedir . '/query.tmp.json';
        $json['tmp'] = static::mergeAssocArray($json['old'], $json['cur']);
        $json['tmp'] = static::mergeAssocArray($json['tmp'], $json['new']);
        $json_output = json_encode($json['tmp'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        file_put_contents($files['tmp'], $json_output);
    }

    /**
     * Summary of mergeAssocArray
     * @param array<string, mixed> $old
     * @param array<string, mixed> $new
     * @return array<string, mixed>
     */
    public static function mergeAssocArray($old, $new)
    {
        foreach ($new as $key => $values) {
            if (!array_key_exists($key, $old)) {
                $old[$key] = $new[$key];
                continue;
            }
            if (is_array($values) && is_array($old[$key])) {
                if (count($values) > 0 && is_string(array_key_first($values)) && count($old[$key]) > 0 && is_string(array_key_first($old[$key]))) {
                    $old[$key] = static::mergeAssocArray($old[$key], $values);
                    continue;
                }
                echo $key . ': ' . implode('-', $old[$key]) . ' != ' . implode('-', $values);
            }
            if ($values == $old[$key]) {
                continue;
            }
            $old[$key] = $values;
        }
        return $old;
    }

    /**
     * Summary of refreshApiFiles
     * @param string $basedir
     * @return void
     */
    public function refreshApiFiles($basedir)
    {
        // Create basedir if necessary
        if (!is_dir($basedir)) {
            mkdir($basedir);
        }
        // Find *Station packages and corresponding *.api files in the appstore (adapt volume if needed)
        $path = '/volume1/@appstore/';
        $found = `find $path -name '*.api' -exec cp -p {} $basedir \;`;
        $found = `find $path -name '*.lib' -exec cp -p {} $basedir \;`;
        // Find *.api files in the webapi itself
        $path = '/usr/syno/synoman/webapi/';
        $found = `find $path -name '*.api' -exec cp -p {} $basedir \;`;
        $found = `find $path -name '*.lib' -exec cp -p {} $basedir \;`;
        // Some cleanup of incomplete API files
        $checkme = ['query.api', 'NoteStation.lib', 'office.lib'];
        foreach ($checkme as $file) {
            if (is_file($basedir . $file)) {
                unlink($basedir . $file);
            }
        }
        $files = scandir($basedir);
        $count = count($files) - 2;
        echo "Found " . $count . " API files...\n";
    }
}
