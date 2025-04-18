<?php

namespace Synology\Applications;

use Synology\AbstractApi;
use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class GenericClient
 *
 * @package Synology\Applications
 */
class GenericClient extends Authenticate
{
    public const API_VERSION = 1;

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($serviceName, $address, $port = null, $protocol = null, $version = self::API_VERSION, $verifySSL = false)
    {
        parent::__construct($serviceName, static::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * Call a generic API method
     *
     * @param string $api
     * @param string $path
     * @param string $method
     * @param array<mixed> $params param values should be json-encoded if API requestFormat is "JSON"
     * @param ?int   $version
     * @param string $httpMethod
     *
     * @return array<mixed>|string|bool|\stdClass
     *
     * @throws Exception
     */
    public function call($api, $path, $method, $params = [], $version = null, $httpMethod = 'get')
    {
        if ($this->getApiName($api) == 'SYNO.API.Info' && $method == 'query') {
            // no authentication needed - skip Authenticate::request() and go directly to AbstractApi::request()
            return AbstractApi::request($api, $path, $method, $params, $version, $httpMethod);
        }
        return $this->request($api, $path, $method, $params, $version, $httpMethod);
    }
}
