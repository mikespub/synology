<?php

namespace Synology;

//const API_HOST = '192.168.2.127';
const API_HOST = 'diskstation';

const API_KEY_PORTAINER = 'ptr_...';
const API_KEY_TRAEFIK = '...';
const API_KEY_RADARR = '...';

/**
 * Class RestApiGateway
 *
 * @package Synology
 */
class RestApiGateway
{
    public string $scheme = 'http://';
    public string $address = 'diskstation';
    /** @var array<string, mixed> */
    public array $options = [];
    public string $config_dir = __DIR__;
    /** @var array<string, mixed> */
    public array $server = [];

    /**
     * Summary of __construct
     * @param string $address
     * @param array<string, mixed> $options
     */
    public function __construct($address, $options = [])
    {
        $this->address = $address;
        $this->options = $options;
        $this->config_dir = $options['config_dir'] ?? __DIR__;
    }

    /**
     * Summary of handleRequest
     * @param array<string, mixed> $serverVars
     * @return void
     */
    public function handleRequest($serverVars)
    {
        $this->server = $serverVars;
        $host = $this->server['HTTP_HOST'] ?? 'localhost';
        $path = $this->server['PATH_INFO'] ?? '';
        $query = $this->server['QUERY_STRING'] ?? '';

        if (!$this->checkValidHost($host)) {
            echo "Hello World\n";
            return;
        }
        if (empty($path)) {
            $json_file = $this->config_dir . '/combined.json';
            $apilist = $this->getApiList($json_file);
            $json_file = $this->config_dir . '/required.json';
            $required = $this->getRequired($json_file);
            $content = $this->getHomePage($apilist, $required, $this->options);
            $this->sendHtmlPage($content);
            return;
        }
        // use output buffer so that we can clean it up if necessary
        ob_start();
        $content = $this->callApiMethod($path, $query);
        $this->sendJson($content);
    }

    /**
     * Summary of checkValidHost
     * @param string $host
     * @return bool
     */
    public function checkValidHost($host)
    {
        if (in_array($host, ['localhost', '127.0.0.1', '::1', 'diskstation', $this->address]) ||
            str_starts_with($host, '192.168.')) {
            return true;
        }
        return false;
    }

    /**
     * Summary of getApiList
     * @param string $json_file
     * @return array<string, mixed>
     */
    public function getApiList($json_file)
    {
        $apilist = [];
        if (is_file($json_file)) {
            $contents = file_get_contents($json_file);
            $apilist = json_decode($contents, true);
            ksort($apilist);
        }
        return $apilist;
    }

    /**
     * Summary of getRequired
     * @param string $json_file
     * @return array<string, mixed>
     */
    public function getRequired($json_file)
    {
        $required = [];
        if (is_file($json_file)) {
            $contents = file_get_contents($json_file);
            $required = json_decode($contents, true);
        }
        return $required;
    }

    /**
     * Summary of getHomePage
     * @param array<string, mixed> $apilist
     * @param array<string, mixed> $required
     * @param array<string, mixed> $extra
     * @return string
     */
    public function getHomePage($apilist, $required, $extra)
    {
        $content = '<html><head><title>Synology Web API Explorer</title></head><body><h1>Synology Web API Explorer</h1><ul>';
        $sid = apcu_fetch('rest_sid');
        if ($sid) {
            $content .= '<li>Session ID: ' . $sid . ' <a href="./rest.php/SYNO.API.Auth/v7/logout">Logout</a></li>';
        } else {
            $content .= '<li><form action="./rest.php/SYNO.API.Auth/v7/login" method="GET">Account: <input type="text" name="account" value=""> Password: <input type="password" name="passwd" value=""> Session: <input type="text" name="session" value="DownloadStation"> <input type="hidden" name="format" value="sid"><input type="submit" value="Login"></form></li>';
        }
        $content .= $this->addExtraContent($extra);
        foreach ($apilist as $root => $json) {
            $content .= '<li>' . $root . '<ul>';
            ksort($json);
            foreach ($json as $api => $values) {
                $content .= $this->addApiMethods($api, $values, $required, $sid);
            }
            $content .= '</ul></li>';
        }
        $content .= '</ul></body></html>';
        return $content;
    }

    /**
     * Summary of addExtraContent
     * @param array<string, mixed> $extra
     * @return string
     */
    public function addExtraContent($extra)
    {
        $content = '';
        if (!empty($extra['portainer'])) {
            $content .= '<li><a href="/swagger/ui/?urls.primaryName=Portainer">Portainer</a><ul>';
            $content .= '<li><a href="./rest.php/portainer/stacks">Stacks</a></li>';
            $content .= '</ul></li>';
            if (!empty($extra['docker'])) {
                $content .= '<li><a href="/swagger/ui/?urls.primaryName=DockerViaPortainer">Docker</a><ul>';
                $content .= '<li><a href="./rest.php/docker/containers/json">Containers</a></li>';
                $content .= '</ul></li>';
            }
        }
        if (!empty($extra['traefik'])) {
            $content .= '<li>Traefik</a><ul>';
            $content .= '<li><a href="./rest.php/traefik/entrypoints">Entrypoints</a></li>';
            $content .= '<li><a href="./rest.php/traefik/rawdata">Raw Data</a></li>';
            $content .= '</ul></li>';
        }
        if (!empty($extra['radarr'])) {
            $content .= '<li><a href="/swagger/ui/?urls.primaryName=Radarr">Radarr</a><ul>';
            //$content .= '<li><a href="./rest.php/radarr/system/status">System Status</a></li>';
            $content .= '<li><a href="./rest.php/radarr/movie">Movie</a></li>';
            $content .= '</ul></li>';
        }
        return $content;
    }

    public function addApiMethods($api, $values, $required, $sid)
    {
        $version = $values['maxVersion'];
        $methods = $values['methods'][$version] ?? false;
        if (!$methods) {
            $version = $values['minVersion'];
            $methods = $values['methods'][$version] ?? [];
        }
        $content = '<li>' . $api . ': ';
        foreach ($methods as $method) {
            if (empty($values['path'])) {
                $content .= $method . ' ';
                continue;
            }
            if (!empty($required[$api]) && !empty($required[$api][$method])) {
                // check if values are "required"
                $params = $required[$api][$method];
                if ($sid) {
                    $params['_sid'] = $sid;
                }
                $query = http_build_query($params);
                $content .= '<a href="./rest.php/' . $api . '/v' . $version . '/' . $method . '?' . $query . '">' . $method . '</a> ';
            } elseif ($sid) {
                $content .= '<a href="./rest.php/' . $api . '/v' . $version . '/' . $method . '?_sid=' . $sid . '">' . $method . '</a> ';
            } else {
                $content .= '<a href="./rest.php/' . $api . '/v' . $version . '/' . $method . '">' . $method . '</a> ';
            }
        }
        $content .= '</li>';
        return $content;
    }

    /**
     * Summary of sendHtmlPage
     * @param string $content
     * @return void
     */
    public function sendHtmlPage($content)
    {
        $type = 'text/html';
        header("Content-type: $type");
        echo $content;
    }

    /**
     * Summary of callApiMethod
     * @param string $path
     * @param string $query
     * @return mixed
     */
    public function callApiMethod($path, $query)
    {
        $pieces = explode('/', $path);
        $api = $pieces[1];
        return match ($api) {
            'portainer' => $this->callPortainer($path, $query),
            'docker' => $this->callDocker($path, $query),
            'traefik' => $this->callTraefik($path, $query),
            'radarr' => $this->callRadarr($path, $query),
            default => $this->callSynology($path, $query),
        };
    }

    /**
     * Summary of callSynology
     * @param string $path
     * @param string $query
     * @return mixed
     */
    public function callSynology($path, $query)
    {
        $pieces = explode('/', $path);
        $api = $pieces[1];
        $version = substr($pieces[2], 1);
        $method = $pieces[3];

        $api2url = require $this->config_dir . '/rest_mapping.php';
        if (!$api2url[$api]) {
            $path = $api . " is unknown";
        }
        $path = $api2url[$api];

        // if we use the Swagger UI
        if (!empty($query) && strpos($query, 'api_key=') !== false) {
            $query = str_replace('api_key=', '_sid=', $query);
        }
        if (strpos($path, 'photo/webapi/') === 0) {
            $url = $this->scheme . $this->address . '/' . $path . '?api=' . $api . '&version=' . $version . '&method=' . $method;
        } else {
            $url = $this->scheme . $this->address . ':5000/webapi/' . $path . '?api=' . $api . '&version=' . $version . '&method=' . $method;
        }
        if ($query) {
            $url .= '&' . $query;
        }
        $headers = [];
        $content = [];
        $content['success'] = true;
        $content['data'] = ['api' => $api, 'version' => $version, 'method' => $method, 'path' => $path, 'query' => $query, 'url' => $url];

        return $this->sendRequest($url, $headers, $content);
    }

    /**
     * Summary of callPortainer
     * @param string $path
     * @param string $query
     * @return mixed
     */
    public function callPortainer($path, $query)
    {
        $pieces = explode('/', $path);
        $path = implode("/", array_slice($pieces, 2));
        $url = $this->scheme . $this->address . ':9000/api/' . $path;
        if (!empty($query)) {
            $url .= '?' . $query;
        }
        $headers = [];
        // set curl header for X-API-Key
        if (!empty($this->server['HTTP_X_API_KEY']) && !preg_match('/[\r\n]/', $this->server['HTTP_X_API_KEY'])) {
            $headers[] = 'X-API-Key: ' . $this->server['HTTP_X_API_KEY'];
        } elseif (!empty($this->server['HTTP_AUTHORIZATION']) && !preg_match('/[\r\n]/', $this->server['HTTP_AUTHORIZATION'])) {
            $headers[] = 'Authorization: ' . $this->server['HTTP_AUTHORIZATION'];
        } elseif (!empty($path)) {
            $apikey = API_KEY_PORTAINER;
            $headers[] = 'X-API-Key: ' . $apikey;
        }
        $headers[] = 'Accept: application/json';
        $content = [];
        $content['server'] = $this->server;

        return $this->sendRequest($url, $headers, $content);
    }

    /**
     * Summary of callDocker
     * @param string $path
     * @param string $query
     * @return mixed
     */
    public function callDocker($path, $query)
    {
        $pieces = explode('/', $path);
        $path = implode("/", array_slice($pieces, 2));
        $url = $this->scheme . $this->address . ':9000/api/endpoints/2/docker/' . $path;
        if (!empty($query)) {
            $url .= '?' . $query;
        }
        $headers = [];
        if (!empty($this->server['HTTP_X_API_KEY']) && !preg_match('/[\r\n]/', $this->server['HTTP_X_API_KEY'])) {
            $headers[] = 'X-API-Key: ' . $this->server['HTTP_X_API_KEY'];
        } elseif (!empty($this->server['HTTP_AUTHORIZATION']) && !preg_match('/[\r\n]/', $this->server['HTTP_AUTHORIZATION'])) {
            $headers[] = 'Authorization: ' . $this->server['HTTP_AUTHORIZATION'];
        } elseif (!empty($path)) {
            $apikey = API_KEY_PORTAINER;
            $headers[] = 'X-API-Key: ' . $apikey;
        }
        $headers[] = 'Accept: application/json';
        $content = [];
        $content['server'] = $this->server;

        return $this->sendRequest($url, $headers, $content);
    }

    /**
     * Summary of callTraefik
     * @param string $path
     * @param string $query
     * @return mixed
     */
    public function callTraefik($path, $query)
    {
        $pieces = explode('/', $path);
        $path = implode("/", array_slice($pieces, 2));
        $url = $this->scheme . $this->address . ':8181/api/' . $path;
        if (!empty($query)) {
            $url .= '?' . $query;
        }
        $headers = [];
        //if (!empty($this->server['HTTP_X_API_KEY']) && !preg_match('/[\r\n]/', $this->server['HTTP_X_API_KEY'])) {
        //    $headers[] = 'X-API-Key: ' . $this->server['HTTP_X_API_KEY'];
        //    $headers[] = 'Accept: application/json';
        //}
        $content = [];
        $content['server'] = $this->server;

        return $this->sendRequest($url, $headers, $content);
    }

    /**
     * Summary of callRadarr
     * @param string $path
     * @param string $query
     * @return mixed
     */
    public function callRadarr($path, $query)
    {
        $pieces = explode('/', $path);
        $path = implode("/", array_slice($pieces, 2));
        $url = $this->scheme . $this->address . ':7878/api/v3/' . $path;
        $apikey = 'apikey=' . API_KEY_RADARR;
        if (!empty($query)) {
            $url .= '?' . $query . '&' . $apikey;
        } else {
            $url .= '?' . $apikey;
        }
        $headers = [];
        //if (!empty($this->server['HTTP_X_API_KEY']) && !preg_match('/[\r\n]/', $this->server['HTTP_X_API_KEY'])) {
        //    $headers[] = 'X-API-Key: ' . $this->server['HTTP_X_API_KEY'];
        //}
        $headers[] = 'Accept: application/json';
        //$headers[] = 'Origin: http://' . $this->server['HTTP_HOST'];
        $is_chunked = true;
        $content = [];
        $content['server'] = $this->server;

        return $this->sendRequest($url, $headers, $content, $is_chunked);
    }

    /**
     * Summary of sendRequest
     * @param string $url
     * @param array<mixed> $headers
     * @param array<string, mixed> $content
     * @param bool $is_chunked
     * @return mixed
     */
    public function sendRequest($url, $headers, $content, $is_chunked = false)
    {
        // create a new cURL resource
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        if ($headers) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $content['headers'] = $headers;
        }

        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 30000); //30s
        //curl_setopt($ch, CURLOPT_VERBOSE, true);

        if ($is_chunked) {
            // https://stackoverflow.com/questions/2294344/what-for-do-we-use-curlopt-writefunction-in-phps-curl
            /**
            $result = "";
            $callback = function ($ch, $str) use ($result) {
                $result .= $str;
                return strlen($str);//return the exact length
            };
            curl_setopt($ch, CURLOPT_VERBOSE, true);
            curl_setopt($ch, CURLOPT_WRITEFUNCTION, $callback);
            curl_exec($ch);
            $info = curl_getinfo($ch);
            curl_close($ch);
            */
            $result = file_get_contents($url);
            $info = $this->parseHeaders($http_response_header);
        } else {
            // grab URL and pass it to the browser
            $result = curl_exec($ch);
            $info   = curl_getinfo($ch);
            if ($result === false) {
                $content['error']['code'] = curl_error($ch);
                $content['error']['errors']['info'] = $info;
                $content['error']['errors']['result'] = $result;
                return $content;
            }
        }

        $content['error']['code'] = $info['http_code'];
        $content['error']['errors']['info'] = $info;
        $content['error']['errors']['result'] = $result;
        if (200 == $info['http_code']) {
            /*
            if (preg_match('#(plain|text)#', $info['content_type'])) {
                return $this->_parseRequest($result);
            } else {
                return $result;
            }
            */
            //$content['error']['errors']['result'] = json_decode($result);
            $content = json_decode($result, true);
            if ($this->server['PATH_INFO'] == '/SYNO.API.Auth/v7/login' && $content['data']['sid']) {
                apcu_store('rest_sid', $content['data']['sid']);
            }
            if ($this->server['PATH_INFO'] == '/SYNO.API.Auth/v7/logout') {
                apcu_delete('rest_sid');
            }
        } else {
            curl_close($ch);
            /*
            if ($info['total_time'] >= (self::CONNECT_TIMEOUT / 1000)) {
                throw new Exception('Connection Timeout');
            } else {
                $this->log($result, 'Result');
                throw new Exception('Connection Error');
            }
            */
        }
        // close cURL resource, and free up system resources
        //curl_close($ch);

        return $content;
    }

    /**
     * Summary of parseHeaders
     * @param array<mixed> $headers
     * @return array<string, mixed>
     */
    public function parseHeaders($headers)
    {
        $head = [];
        foreach ($headers as $k => $v) {
            $t = explode(':', $v, 2);
            if (isset($t[1])) {
                $head[ trim($t[0]) ] = trim($t[1]);
            } else {
                $head[] = $v;
                if (preg_match("#HTTP/[0-9\.]+\s+(\d+)#", $v, $out)) {
                    $head['http_code'] = intval($out[1]);
                }
            }
        }
        return $head;
    }

    /**
     * Summary of sendJson
     * @param mixed $content
     * @return void
     */
    public function sendJson($content)
    {
        ob_end_flush();
        $type = 'application/json';
        header("Content-type: $type");
        if (!empty($this->server['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: " . $this->server['HTTP_ORIGIN']);
        }
        echo json_encode($content, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}

$address = API_HOST;
$options = [
    //'config_dir' => 'api/example',
    'config_dir' => __DIR__,
    'portainer' => false,
    'docker' => false,
    'traefik' => false,
    'radarr' => false,
];
$serverVars = $_SERVER;

$gateway = new RestApiGateway($address, $options);
$gateway->handleRequest($serverVars);
