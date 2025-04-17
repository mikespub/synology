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
    private $_authApi = null;
    private $_sessionName = null;

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
        $this->_sessionName = $serviceName;
        $this->_authApi     = new Api($address, $port, $protocol, $version);
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
        return $this->_authApi->connect($login, $password, $this->_sessionName, $code);
    }

    /**
     * Disconnect to Synology
     */
    public function disconnect()
    {
        return $this->_authApi->disconnect();
    }

    /**
     * Summary of setHttpClient
     * @param HttpClientInterface $client
     * @return void
     */
    public function setHttpClient($client)
    {
        $this->_authApi->setHttpClient($client);
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
        return $this->_authApi->getSessionId();
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
        $this->_authApi->setSessionId($sid);

        return $this;
    }

    /**
     * Return true if connected
     *
     * @return boolean
     */
    public function isConnected()
    {
        return $this->_authApi->isConnected();
    }

    /**
     * {@inheritDoc}
     */
    protected function _request($api, $path, $method, $params = [], $version = null, $httpMethod = 'get')
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

            return parent::_request($api, $path, $method, $params, $version, $httpMethod);
        }
        throw new Exception('Not Connected');
    }

    /**
     * {@inheritDoc}
     */
    public function activateDebug()
    {
        parent::activateDebug();
        $this->_authApi->activateDebug();

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
        $this->_authApi->keepConnection($keepConnection);

        return $this;
    }
}
