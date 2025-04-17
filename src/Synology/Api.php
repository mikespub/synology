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
    public const API_AUTH_VERSION = '6';

    private $_sid = null;
    private $_sessionName = 'default';

    /**
     * TRUE if the connection shouldn't be closed automatically.
     *
     * @var boolean
     */
    private $_keepConnection = false;

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
     * @return array
     */
    public function getAvailableApi()
    {
        $method = 'query';
        $params = ['query' => 'all'];
        $version = 1;
        return $this->_request('Info', 'query.cgi', $method, $params, $version);
    }

    /**
     * Connect to Synology
     *
     * @param string $username
     * @param string $password
     * @param ?string $sessionName
     * @param int|null $code
     *
     * @return Api
     */
    public function connect($username, $password, $sessionName = null, $code = null, $auth_version = self::API_AUTH_VERSION)
    {
        if (!empty($sessionName)) {
            $this->_sessionName = $sessionName;
        }

        $this->log($this->_sessionName, 'Connect Session');
        $this->log($username, 'User');

        $options = [
            'account' => $username,
            'passwd'  => $password,
            'session' => $this->_sessionName,
            'format'  => 'sid',
        ];

        if ($this->_version > 2 && $code !== null) {
            $options['otp_code'] = $code;
        }

        $data = $this->_request('Auth', 'auth.cgi', 'login', $options, $auth_version);

        // save session name id
        $this->_sid = $data->sid;

        return $this;
    }

    /**
     * Logout from Synology
     *
     * @return Api
     */
    public function disconnect()
    {
        $this->log($this->_sessionName, 'Disconnect Session');
        $this->_request('Auth', 'auth.cgi', 'logout', ['_sid' => $this->_sid, 'session' => $this->_sessionName]);
        $this->_sid = null;

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
        if ($this->_sid) {
            return $this->_sid;
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
        $this->_sid = $sid;

        return $this;
    }

    /**
     * Return true if connected
     *
     * @return boolean
     */
    public function isConnected()
    {
        if (!empty($this->_sid)) {
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
        return $this->_sessionName;
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
        $this->_keepConnection = $keepConnection;

        return $this;
    }

    public function __destruct()
    {
        if ($this->_sid !== null && !$this->_keepConnection) {
            $this->disconnect();
        }
    }
}
