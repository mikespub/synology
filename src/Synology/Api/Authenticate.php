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
     * @see https://kb.synology.com/en-global/DG/DSM_Login_Web_API_Guide/3
     *
     * @param string $login
     * @param string $password
     * @param int|null $code for Example 2: Login with OTP
     * @param ?string $deviceName for Example 3: Login with OTP and to enable to omit 2-factor verification
     * @param ?string $deviceId for Example 4: Login with omitted OTP
     *
     * @return Api
     */
    public function connect($login, $password, $code = null, $deviceName = null, $deviceId = null)
    {
        return $this->authApi->connect($login, $password, $this->sessionName, $code, $deviceName, $deviceId);
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
     * Refresh SynoToken to avoid CSRF
     * @return string|null
     */
    public function refreshToken()
    {
        return $this->authApi->refreshToken();
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
     * Get device id (if any) for next login with omitted OTP - see Example 3 & 4 above
     * @return string|null
     */
    public function getDeviceId()
    {
        return $this->authApi->getDeviceId();
    }

    /**
     * Get current SynoToken to avoid CSRF (if any)
     * @return string|null
     */
    public function getSynoToken()
    {
        return $this->authApi->getSynoToken();
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
            // @todo send + refresh SynoToken if requested

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
