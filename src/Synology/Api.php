<?php

namespace Synology;

/**
 * Class Api
 *
 * @package Synology
 */
class Api extends AbstractApi
{
    public const API_SERVICE_NAME = 'API';
    public const API_AUTH_VERSION = 6;

    private ?string $sessionId = null;
    private string $sessionName = 'default';

    /**
     * TRUE if the connection shouldn't be closed automatically.
     *
     * @var boolean
     */
    private $keepConnection = false;

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($address, $port = null, $protocol = null, $version = 1, $verifySSL = false)
    {
        parent::__construct(self::API_SERVICE_NAME, self::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * Get a list of Service and Apis
     *
     * @param string $query default "all"
     * @return array<string, \stdClass>
     */
    public function getAvailableApi($query = "all")
    {
        $method = 'query';
        $params = ['query' => $query];
        $version = 1;
        // get top-level assoc array instead of stdClass here
        $this->associative = true;
        return $this->request('Info', 'query.cgi', $method, $params, $version);
    }

    /**
     * Connect to Synology
     *
     * @param string $username
     * @param string $password
     * @param ?string $sessionName
     * @param int|null $code
     * @param int|null $auth_version
     *
     * @return Api
     */
    public function connect($username, $password, $sessionName = null, $code = null, $auth_version = self::API_AUTH_VERSION)
    {
        if (!empty($sessionName)) {
            $this->sessionName = $sessionName;
        }

        $this->log($this->sessionName, 'Connect Session');
        $this->log($username, 'User');

        $options = [
            'account' => $username,
            'passwd'  => $password,
            'session' => $this->sessionName,
            'format'  => 'sid',
        ];

        if ($this->version > 2 && $code !== null) {
            $options['otp_code'] = $code;
        }

        $data = $this->request('Auth', 'auth.cgi', 'login', $options, $auth_version);

        // save session name id
        $this->sessionId = $data->sid;

        return $this;
    }

    /**
     * Logout from Synology
     *
     * @return Api
     */
    public function disconnect()
    {
        $this->log($this->sessionName, 'Disconnect Session');
        $this->request('Auth', 'auth.cgi', 'logout', ['_sid' => $this->sessionId, 'session' => $this->sessionName]);
        $this->sessionId = null;

        return $this;
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
        if ($this->sessionId) {
            return $this->sessionId;
        } else {
            throw new Exception('Missing session');
        }
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
        $this->sessionId = $sid;

        return $this;
    }

    /**
     * Return true if connected
     *
     * @return boolean
     */
    public function isConnected()
    {
        if (!empty($this->sessionId)) {
            return true;
        }

        return false;
    }

    /**
     * Return Session Name
     *
     * @return string
     */
    public function getSessionName()
    {
        return $this->sessionName;
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
        $this->keepConnection = $keepConnection;

        return $this;
    }

    public function __destruct()
    {
        if ($this->sessionId !== null && !$this->keepConnection) {
            try {
                $this->disconnect();
            } catch (\Exception) {
                // ...
            }
        }
    }
}
