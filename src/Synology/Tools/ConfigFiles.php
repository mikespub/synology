<?php

namespace Synology\Tools;

use Synology\Applications\ClientFactory;
use Synology\Applications\GenericClient;

/**
 * Summary of ConfigFiles
 */
trait ConfigFiles
{
    protected const COMBINED_FILE = 'combined.json';
    protected const REQUIRED_FILE = 'required.json';
    protected const OPENAPI_DIR = '/openapi/';
    protected const SCHEMAS_DIR = '/schemas/';
    protected const RESULTS_DIR = '/results/';
    protected const ERRORS_DIR = '/errors/';
    protected const JSON_EXTENSION = '.json';

    public string $host;
    public int $port;
    public string $http;
    protected string $user;
    protected string $pass;
    protected string $tools;
    /** @var array<string, mixed> */
    protected array $apilist = [];
    /** @var array<string, mixed> */
    protected array $required = [];

    /**
     * Info API setup
     *
     * @param ?string $address
     * @param ?int    $port
     * @param ?string $username
     * @param ?string $password
     * @param ?string $protocol
     */
    public function __construct($address = null, $port = null, $username = null, $password = null, $protocol = null)
    {
        $this->setEnvVars($address, $port, $username, $password, $protocol);
        $tools = dirname(__DIR__, 3) . '/tools';
        $this->loadApiList($tools);
    }

    /**
     * Summary of setEnvVars
     * @param ?string $address
     * @param ?int    $port
     * @param ?string $username
     * @param ?string $password
     * @param ?string $protocol
     * @return void
     */
    public function setEnvVars($address = null, $port = null, $username = null, $password = null, $protocol = null)
    {
        $this->host = $address ?? $_ENV['API_HOST'] ?? 'localhost';
        $this->port = (int) ($port ?? $_ENV['API_PORT'] ?? 5001);
        $this->user = $username ?? $_ENV['API_USER'] ?? 'admin';
        $this->pass = $password ?? $_ENV['API_PASS'] ?? '*****';
        $this->http = $protocol ?? (($this->port === 5001) ? 'https' : 'http');
    }

    /**
     * Summary of getGenericClient
     * @param string $service for SYNO.Service[.*] API method calls
     * @param ?int   $version @deprecated can vary per API method
     * @param bool   $connect default true
     * @return GenericClient
     */
    public function getGenericClient($service, $version = null, $connect = true)
    {
        $client = ClientFactory::getGeneric($service, $this->host, $this->port, $this->http, $version);
        if ($connect) {
            $client->connect($this->user, $this->pass);
        }
        return $client;
    }

    /**
     * Summary of loadApiList
     * @param string $tools
     * @return void
     */
    public function loadApiList($tools)
    {
        $this->tools = $tools;
        $this->apilist = $this->getApiListFile();
        $this->required = $this->getRequiredFile();
    }

    /**
     * Summary of getApiListFile
     * @param ?string $file
     * @return array<string, mixed>
     */
    public function getApiListFile($file = null)
    {
        $file ??= $this->tools . '/' . static::COMBINED_FILE;
        $apilist = [];
        if (is_file($file)) {
            $contents = file_get_contents($file);
            $apilist = json_decode($contents, true);
            ksort($apilist);
        }
        return $apilist;
    }

    /**
     * Summary of getRequiredFile
     * @param ?string $file
     * @return array<string, mixed>
     */
    public function getRequiredFile($file = null)
    {
        $file ??= $this->tools . '/' . static::REQUIRED_FILE;
        $required = [];
        if (is_file($file)) {
            $contents = file_get_contents($file);
            $required = json_decode($contents, true);
        }
        return $required;
    }

    /**
     * Summary of getRequiredParams
     * @param string $api
     * @param string $method
     * @param string $format
     * @return array<string, mixed>
     */
    public function getRequiredParams($api, $method, $format = "")
    {
        $params = [];
        if (!empty($this->required[$api]) && !empty($this->required[$api][$method])) {
            $params = $this->required[$api][$method];
            if (!empty($format) && $format == "JSON") {
                foreach ($params as $key => $value) {
                    $params[$key] = json_encode($value, JSON_UNESCAPED_SLASHES);
                }
            }
        }
        return $params;
    }

    /**
     * Summary of getSchemaFile
     * @param string $api
     * @param string $method
     * @return string
     */
    public function getSchemaFile($api, $method)
    {
        return $this->tools . static::SCHEMAS_DIR . $api . '-' . $method . static::JSON_EXTENSION;
    }

    /**
     * Summary of getResultFile
     * @param string $api
     * @param string $method
     * @return string
     */
    public function getResultFile($api, $method)
    {
        return $this->tools . static::RESULTS_DIR . $api . '-' . $method . static::JSON_EXTENSION;
    }

    /**
     * Summary of getErrorFile
     * @param string $api
     * @param string $method
     * @return string
     */
    public function getErrorFile($api, $method)
    {
        return $this->tools . static::ERRORS_DIR . $api . '-' . $method . static::JSON_EXTENSION;
    }
}
