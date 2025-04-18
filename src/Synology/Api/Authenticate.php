<?php

namespace Synology\Api;

use Synology\AbstractApi;
use Synology\Api;
use Synology\Exception;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class Authenticate
 *
 * @package Synology\Api
 */
class Authenticate extends AbstractApi
{
    private Api $authApi;
    private string $sessionName;

    /**
     * Constructor
     *
     * @param string  $serviceName
     * @param string  $namespace
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($serviceName, $namespace, $address, $port = null, $protocol = null, $version = 1, $verifySSL = false)
    {
        parent::__construct($serviceName, $namespace, $address, $port, $protocol, $version, $verifySSL);
        $this->sessionName = $serviceName;
        $this->authApi     = new Api($address, $port, $protocol, $version);
    }

    /**
     * Get a list of Apis for this Service
     *
     * @param ?string $serviceName
     * @return array<string, \stdClass>
     */
    public function getAvailableApi($serviceName = null)
    {
        $serviceName ??= $this->serviceName;
        $apiList = $this->authApi->getAvailableApi();
        if (str_starts_with($serviceName, $this->namespace . '.')) {
            $prefix = $serviceName . '.';
        } else {
            $prefix = $this->namespace . '.' . $serviceName . '.';
        }
        return array_filter($apiList, function ($api) use ($prefix) {
            return str_starts_with($api, $prefix);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * Connect to Synology
     *
     * @param string $login
     * @param string $password
     * @param int|null $code
     *
     * @return Api
     */
    public function connect($login, $password, $code = null)
    {
        return $this->authApi->connect($login, $password, $this->sessionName, $code);
    }

    /**
     * Disconnect to Synology
     * @return Api
     */
    public function disconnect()
    {
        return $this->authApi->disconnect();
    }

    /**
     * Summary of setHttpClient
     * @param HttpClientInterface $client
     * @return void
     */
    public function setHttpClient($client)
    {
        $this->client = $client;
        $this->authApi->setHttpClient($client);
    }

    /**
     * Return Session Id
     *
     * @throws Exception
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->authApi->getSessionId();
    }

    /**
     * Set session ID.
     *
     * @param string $sid
     *   The session ID.
     *
     * @return $this
     */
    public function setSessionId($sid)
    {
        $this->authApi->setSessionId($sid);

        return $this;
    }

    /**
     * Return true if connected
     *
     * @return boolean
     */
    public function isConnected()
    {
        return $this->authApi->isConnected();
    }

    /**
     * {@inheritDoc}
     */
    protected function request($api, $path, $method, $params = [], $version = null, $httpMethod = 'get')
    {
        if ($this->isConnected()) {
            if (!is_array($params)) {
                if (!empty($params)) {
                    $params = [$params];
                } else {
                    $params = [];
                }
            }

            $params['_sid'] = $this->getSessionId();

            return parent::request($api, $path, $method, $params, $version, $httpMethod);
        }
        throw new Exception('Not Connected');
    }

    /**
     * {@inheritDoc}
     */
    public function activateDebug()
    {
        parent::activateDebug();
        $this->authApi->activateDebug();

        return $this;
    }

    /**
     * Turn off automatically closing the connection.
     *
     * @param boolean $keepConnection
     *   (optional) TRUE if the connection shouldn't be closed automatically.
     *
     * @return $this
     */
    public function keepConnection($keepConnection = true)
    {
        $this->authApi->keepConnection($keepConnection);

        return $this;
    }
}
