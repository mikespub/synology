<?php

/**
 * Generate new swagger files for Synology Web APIs
 *
 * This PHP script will analyze the API json files available in ../docs
 * when you install this package with composer, and generate new swagger
 * files based on the APIs and templates provided.
 *
 * If you install Swagger Editor or Swagger UI under your Web Station, and
 * adapt the .htaccess file as mentioned in the swagger file, you can then
 * explore some of the Synology Web APIs directly in your browser.
 *
 *
 * If you have an older DSM release or older packages that don't support the
 * latest API version, you can refresh the API files by calling the function
 * refresh_api_files() below and generate the swagger files again.
 */

// TODO: run example.php afterwards to copy files for Swagger Editor
//
//refresh_api_files('../docs/');
//merge_query_files();
//exit;

$json_file = 'combined.json';
//if (true || !is_file($json_file)) {
if (!is_file($json_file)) {
    combine_json_files();
}
//exit;
$contents = file_get_contents($json_file);
$apilist = json_decode($contents, true);
if (!$apilist) {
    echo json_last_error();
    exit;
}
generate_swagger($apilist, true);
exit;

function load_template($name)
{
    $file = 'templates' . DIRECTORY_SEPARATOR . $name . '.yaml';
    return file_get_contents($file);
}

function replace_params($template, $params)
{
    $search = [];
    $replace = [];
    foreach ($params as $key => $val) {
        array_push($search, '%' . $key . '%');
        array_push($replace, $val);
    }
    return str_replace($search, $replace, $template);
}

function get_ip_address()
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

function generate_swagger($apilist, $debug = false)
{
    // if running on the Synology, this should be enough to start
    //$host = get_ip_address();
    $host = 'diskstation';
    // if running elsewhere, please adapt manually
    //$host = '192.168.x.x';

    $http = 'http';
    if ($http == 'http') {
        $port = 5000;
    } else {
        $port = 5001;
    }

    $header_tmpl = load_template('header');
    $path_tmpl = load_template('path');
    $query_tmpl = load_template('query');
    $rest_tmpl = load_template('rest');
    $header_rest_tmpl = load_template('header_rest');

    $params = [];
    $params['host'] = $host;
    $params['port'] = $port;
    $params['http'] = $http;
    $params['location'] = 'path';
    $path_output = replace_params($header_tmpl, $params);
    $path_output .= load_template('api_path');
    $params['location'] = 'query';
    $query_output = replace_params($header_tmpl, $params);
    $query_output .= load_template('api_query');
    //$rest_output = replace_params($header_tmpl, $params);
    //$rest_output .= load_template('api_rest');

    $api2url = [];
    $paths = [];
    foreach ($apilist as $root => $json) {
        echo $root . "\n";
        $params = [];
        $params['host'] = $host;
        $params['port'] = $port;
        $params['http'] = $http;
        $params['location'] = 'query';
        $rest_output = replace_params($header_rest_tmpl, $params);
        $rest_output .= load_template('api_rest');
        foreach ($json as $api => $values) {
            $params = [];
            $params['api'] = $api;
            echo "\t" . $api . "\n";
            $params['tag'] = explode('.', $api)[1];
            $params['tag2'] = explode('.', $api)[2];
            foreach ($values as $idx => $val) {
                if (is_array($val)) {
                    echo "\t\t".$idx.":".json_encode($val)."\n";
                } else {
                    echo "\t\t".$idx.":".$val."\n";
                }
            }
            //continue;
            $path = $values['path'];
            // FIXME: dirty hack for relative PhotoStation URIs - this uses a PHP session id to authenticate?
            if ($params['tag'] == 'PhotoStation' && strpos($path, '/') === false) {
                $path = 'photo/webapi/' . $path;
            }
            /*
            if ($path && array_key_exists($path, $paths)) {
                echo $path." is already defined: ".$paths[$path]."\n";
                exit;
                continue;
            }
            */
            $api2url[$api] = $path;
            $paths[$path] = $api;
            $params['path'] = $path;
            if ($values['lib']) {
                $params['lib'] = $values['lib'];
            }
            $params['version'] = $values['maxVersion'];
            $methods = $values['methods'][$params['version']];
            if (!$methods) {
                var_dump($values);
                var_dump($params);
                $methods = $values['methods'][$values['minVersion']] ?? [];
                $params['version'] = $values['minVersion'];
                //exit;
            }
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
                //continue;
            }
            $params['methodlist'] = implode(', ', $methods);
            $params['api2'] = implode('_', array_slice(explode('.', $api), 2));
            $query_output .= replace_params($query_tmpl, $params);
            foreach ($methods as $method) {
                $params['method'] = $method;
                $path_output .= replace_params($path_tmpl, $params);
                $rest_output .= replace_params($rest_tmpl, $params);
            }
        }
        $tag = explode('.', $root)[1];
        //$rest_file = 'swagger_'.$tag.'.yaml';
        $rest_file = $tag . '.yaml';
        file_put_contents($rest_file, $rest_output);
        echo 'Generated ' . $rest_file . "\n";
    }
    //exit;

    //$path_file = 'swagger_path.yaml';
    $path_file = 'path.yaml';
    file_put_contents($path_file, $path_output);
    echo 'Generated ' . $path_file . "\n";

    //$query_file = 'swagger_query.yaml';
    $query_file = 'query.yaml';
    file_put_contents($query_file, $query_output);
    echo 'Generated ' . $query_file . "\n";

    //$rest_file = 'swagger_rest.yaml';
    //$rest_file = 'rest.yaml';
    //file_put_contents($rest_file, $rest_output);
    //echo 'Generated '.$rest_file."\n";

    $map_file = 'rest_mapping.php';
    $map_output = '<?php

const API_PATH = \'entry.cgi\';
$api2url = [];
';
    //$paths['query.cgi'] = 'SYNO.API.Info';
    //$paths['auth.cgi'] = 'SYNO.API.Auth';
    //$paths['encryption.cgi'] = 'SYNO.API.Encryption';
    foreach ($api2url as $api => $path) {
        if ($path == 'entry.cgi') {
            $map_output .= "\$api2url['$api'] = API_PATH;\n";
        } else {
            $map_output .= "\$api2url['$api'] = '$path';\n";
        }
    }
    file_put_contents($map_file, $map_output);
    echo 'Generated ' . $map_file . "\n";
}

function clean_values($values)
{
    $getvars = ['maxVersion', 'minVersion', 'path', 'requestFormat', 'methods', 'lib'];
    $cleaned = [];
    foreach ($values as $key => $val) {
        if (in_array($key, $getvars)) {
            $cleaned[$key] = $val;
        }
    }
    if ($cleaned['methods']) {
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
    }
    return $cleaned;
}

function merge_assoc_array($old, $new)
{
    foreach ($new as $key => $values) {
        if (!array_key_exists($key, $old)) {
            $old[$key] = $new[$key];
            continue;
        }
        if (is_array($values) && is_array($old[$key])) {
            if (count($values) > 0 && is_string(array_key_first($values)) && count($old[$key]) > 0 && is_string(array_key_first($old[$key]))) {
                $old[$key] = merge_assoc_array($old[$key], $values);
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

function merge_query_files()
{
    $files = [];
    $files['old'] = 'query.old.json';
    $files['cur'] = 'query.cur.json';
    $files['new'] = 'query.new.json';
    $json = [];
    $apilist = [];
    foreach ($files as $key => $filepath) {
        $contents = file_get_contents($filepath);
        $json[$key] = json_decode($contents, true);
    }
    $files['tmp'] = 'query.tmp.json';
    $json['tmp'] = merge_assoc_array($json['old'], $json['cur']);
    $json['tmp'] = merge_assoc_array($json['tmp'], $json['new']);
    $json_output = json_encode($json['tmp'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    file_put_contents($files['tmp'], $json_output);
}

function combine_json_files()
{
    // Get current paths from SYNO.API.Info
    // TODO: retrieve current paths for active packages
    // http://192.168.x.x/rest.php/SYNO.API.Info/v1/query
    // http://localhost:5000/webapi/query.cgi?api=SYNO.API.Info&version=1&method=query&query=ALL
    $filepath = 'query.json';
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
    //exit;

    // Load API json files from ../docs directory
    $dir = '..' . DIRECTORY_SEPARATOR . 'docs';
    $files = scandir($dir);
    $apilist = [];
    foreach ($files as $file) {
        // skip API file itself
        //if ($file == 'API.json' || $file == 'query.api') {
        //    continue;
        //}
        $filepath = $dir . DIRECTORY_SEPARATOR . $file;
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
            $values = clean_values($values);
            if (strpos($api, 'PhotoStation') === false) {
                if (empty($auth[$api])) {
                    echo "Unknown api $api\n";
                    //continue;
                    exit;
                    if (empty($values['path'])) {
                        $values['path'] = 'entry.cgi';
                        if (empty($values['requestFormat'])) {
                            $values['requestFormat'] = 'JSON';
                        }
                    }
                } else {
                    if (!empty($values['path']) && $values['path'] != $auth[$api]['path']) {
                        echo "Invalid path ".$values['path']." for api $api in $file\n";
                        //continue;
                        //exit;
                        $values['path'] = $auth[$api]['path'];
                    }
                    if (!empty($values['maxVersion']) && $values['maxVersion'] != $auth[$api]['maxVersion']) {
                        echo "Invalid maxVersion ".$values['maxVersion']." for api $api in $file\n";
                        exit;
                    }
                }
            }
            $root = implode('.', array_slice(explode('.', $api), 0, 2));
            if (!empty($apilist[$root]) && !empty($apilist[$root][$api])) {
                echo "Already seen $api\n";
                $apilist[$root][$api] = array_merge($apilist[$root][$api], $values);
                continue;
                //exit;
            }
            $apilist[$root] ??= [];
            if ($auth[$api]) {
                $apilist[$root][$api] = array_merge($values, $auth[$api]);
            } else {
                $apilist[$root][$api] = $values;
            }
        }
    }
    //exit;
    ksort($apilist);
    $json_output = json_encode($apilist, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    $json_file = 'combined.json';
    file_put_contents($json_file, $json_output);
    echo 'Generated ' . $json_file . "\n";
    foreach ($apilist as $root => $json) {
        ksort($json);
        $json_output = json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $tag = explode('.', $root)[1];
        $json_file = $tag . '.json';
        file_put_contents($json_file, $json_output);
        echo 'Generated ' . $json_file . "\n";
    }
    //var_dump($apilist);
}

function refresh_api_files($basedir)
{
    // Create basedir if necessary
    if (!is_dir($basedir)) {
        mkdir($basedir);
    }
    // Find *Station packages and corresponding *.api files in the appstore (adapt volume if needed)
    $path = '/volume1/@appstore/';
    #$found = `find $path -path '*Station/*' -name '*.api' -exec cp {} $basedir \;`;
    $found = `find $path -name '*.api' -exec cp -p {} $basedir \;`;
    #$found = `find $path -path '*Station/*' -name '*.lib' -exec cp {} $basedir \;`;
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
