<?php

namespace Synology;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class AbstractApi
 *
 * @package Synology
 */
abstract class AbstractApi
{
    public const API_NAMESPACE = 'SYNO';
    public const API_PATH = 'entry.cgi';
    public const PROTOCOL_HTTP = 'http';
    public const PROTOCOL_HTTPS = 'https';
    public const CONNECT_TIMEOUT = 2000; //2s
    public const REQUEST_TIMEOUT = 30000; //30s

    protected $serviceName = null;
    protected $namespace = null;
    protected $version = 1;
    protected $associative = false;
    private $protocol = self::PROTOCOL_HTTP;
    private $port = 80;
    private $address = '';
    private $debug = false;
    private $verifySSL = false;
    private $separator = '&';
    private $encoding = PHP_QUERY_RFC3986;
    private $errorCodes = [
        '?' => [
            '?' => [
                100 => 'Unknown error',
                101 => 'No parameter of API, method or version',
                102 => 'The requested API does not exist',
                103 => 'The requested method does not exist',
                104 => 'The requested version does not support the functionality',
                105 => 'The logged in session does not have permission',
                106 => 'Session timeout',
                107 => 'Session interrupted by duplicate login',
            ],
        ],
        'auth.cgi' => [
            'Auth' => [
                101 => 'The account parameter is not specified',
                400 => 'Invalid password',
                403 => 'One time password not specified',
            ],
        ],
        'entry.cgi' => [
            'HomeMode' => [
                400 => 'Operation Failed',
                401 => 'Parameter invalid',
            ],
        ],
    ];
    protected $client = null;

    /**
     * Setup API
     *
     * @param string  $serviceName
     * @param string  $namespace
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($serviceName, $namespace, $address, $port = null, $protocol = self::PROTOCOL_HTTP, $version = 1, $verifySSL = false)
    {
        $this->serviceName = $serviceName;
        $this->namespace   = $namespace;
        $this->address     = $address;
        $this->verifySSL   = $verifySSL;
        $this->separator   = ini_get('arg_separator.output');

        if (!empty($port) && is_numeric($port)) {
            $this->port = (int) $port;
        }

        if (!empty($protocol)) {
            $this->protocol = $protocol;
        }

        $this->version = $version;
    }

    /**
     * Get the base URL
     *
     * @return string
     */
    protected function getBaseUrl()
    {
        return $this->protocol . '://' . $this->address . ':' . $this->port . '/webapi/';
    }

    /**
     * Get ApiName
     *
     * @param string $api
     *
     * @return string
     */
    protected function getApiName($api)
    {
        if (empty($api)) {
            return $this->namespace . '.' . $this->serviceName;
        }
        return $this->namespace . '.' . $this->serviceName . '.' . $api;
    }

    /**
     * Process a request
     *
     * @param string $api API type for SYNO.Service.Type...
     * @param string $path
     * @param string $method
     * @param array<mixed> $params
     * @param ?int   $version
     * @param string $httpMethod
     *
     * @return array<mixed>|string|bool|\stdClass
     *
     * @throws Exception
     */
    protected function request($api, $path, $method, $params = [], $version = null, $httpMethod = 'get')
    {
        if (!is_array($params)) {
            if (!empty($params)) {
                $params = [$params];
            } else {
                $params = [];
            }
        }
        $params['api']     = $this->getApiName($api);
        $params['version'] = ((int) $version > 0) ? (int) $version : $this->version;
        $params['method']  = $method;

        // get http client
        $client = $this->getHttpClient();

        $url = $this->getBaseUrl() . $path;
        if ($httpMethod !== 'post') {
            $this->log($url, 'Requested Url');
            $this->log($params, 'Query Variable');
            $response = $client->request('GET', $url, ['query' => $params]);

        } else {
            $this->log($url, 'Requested Url');
            $this->log($params, 'Post Variable');
            // verify if we need to send multipart/form-data, application/x-www-form-urlencoded or application/json ['json' => array]
            $response = $client->request('POST', $this->getBaseUrl() . $path, ['body' => $params]);
        }

        // gets the response body as a string
        $result = $response->getContent();
        // returns info coming from the transport layer, such as "response_headers",
        // "redirect_count", "start_time", "redirect_url", etc.
        $info = $response->getInfo();
        if (!isset($info['http_code'])) {
            // gets the HTTP status code of the response
            $status = $response->getStatusCode();
            $info['http_code'] = $status;
        }
        if (!isset($info['content_type'])) {
            // gets the HTTP headers as string[][] with the header names lower-cased
            $headers = $response->getHeaders();
            $headers['content-type'] ??= ['unknown/unknown'];
            $info['content_type'] = $headers['content-type'][0];
        }

        $this->log($info['http_code'], 'Response code');
        if (200 == $info['http_code']) {
            if (preg_match('#(plain|text|json)#', $info['content_type'])) {
                return $this->parseRequest($api, $path, $result);
            } else {
                return $result;
            }
        } else {
            if ($info['total_time'] >= (self::REQUEST_TIMEOUT / 1000)) {
                throw new Exception('Connection Timeout');
            } else {
                $this->log($result, 'Result');
                throw new Exception('Connection Error');
            }
        }
    }

    /**
     * @param string $api
     * @param string $path
     * @param string $json
     *
     * @throws Exception
     * @return \stdClass|array<mixed>|string|bool
     */
    private function parseRequest($api, $path, $json)
    {
        if (($data = json_decode(trim($json))) !== null) {
            if ($data->success == 1) {
                if (isset($data->data)) {
                    if ($this->associative && $data->data instanceof \stdClass) {
                        // return top-level assoc array for data
                        return (array) $data->data;
                    }
                    return $data->data;
                }
                return true;
            } else {
                $code = $data->error->code;

                if (isset($this->errorCodes[$path][$api][$code])) {
                    throw new Exception($this->errorCodes[$path][$api][$code], $code);
                } elseif (isset($this->errorCodes['?']['?'][$code])) {
                    throw new Exception($this->errorCodes['?']['?'][$code], $code);
                } else {
                    throw new Exception('Unknown error', $code);
                }
            }
        }
        return $json;
    }

    /**
     * Activate the debug mode
     *
     * @return AbstractApi
     */
    public function activateDebug()
    {
        $this->debug = true;

        return $this;
    }

    /**
     * Log different data
     *
     * @param mixed  $value
     * @param ?string $key
     */
    protected function log($value, $key = null)
    {
        if ($this->debug) {
            if ($key != null) {
                echo $key . ': ';
            }

            if (is_object($value) || is_array($value)) {
                $value = PHP_EOL . print_r($value, true);
            }

            echo $value . PHP_EOL;
        }
    }

    /**
     * Summary of setHttpClient
     * @param HttpClientInterface $client
     * @return void
     */
    public function setHttpClient($client)
    {
        $this->client = $client;
    }

    /**
     * Summary of getHttpClient
     * @return HttpClientInterface
     */
    public function getHttpClient()
    {
        $this->client ??= HttpClient::create([
            'verify_peer' => $this->verifySSL,
            'verify_host' => $this->verifySSL,
            'max_duration' => (float) self::REQUEST_TIMEOUT / 1000.0,
        ]);
        return $this->client;
    }

    /**
     * Summary of setServiceName
     * @param string $serviceName
     * @return void
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }

    /**
     * @param int $encoding
     */
    public function setEncType($encoding)
    {
        $this->encoding = $encoding;
    }

}
