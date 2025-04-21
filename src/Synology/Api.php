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

    private ?string $deviceId = null;
    private ?string $deviceName = null;
    private ?string $sessionId = null;
    private string $sessionName = 'default';
    private ?string $synoToken = null;

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
    public function __construct($address, $port = null, $protocol = null, $version = self::API_AUTH_VERSION, $verifySSL = false)
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
     * @see https://kb.synology.com/en-global/DG/DSM_Login_Web_API_Guide/3
     *
     * @param string $username
     * @param string $password
     * @param ?string $sessionName
     * @param int|null $code for Example 2: Login with OTP
     * @param ?string $deviceName for Example 3: Login with OTP and to enable to omit 2-factor verification
     * @param ?string $deviceId for Example 4: Login with omitted OTP
     * @param int|null $authVersion
     *
     * @return Api
     */
    public function connect($username, $password, $sessionName = null, $code = null, $deviceName = null, $deviceId = null, $authVersion = self::API_AUTH_VERSION)
    {
        if (!empty($sessionName)) {
            $this->sessionName = $sessionName;
        }
        if (!empty($deviceName)) {
            $this->deviceName = $deviceName;
        }
        if (!empty($deviceId)) {
            $this->deviceId = $deviceId;
        }
        $this->version = $authVersion;

        $this->log($this->sessionName, 'Connect Session');
        $this->log($username, 'User');

        // Example 1: Login
        $options = [
            'account' => $username,
            'passwd'  => $password,
            'session' => $this->sessionName,
            'format'  => 'sid',
        ];

        if ($this->version > 2 && $code !== null) {
            // Example 2: Login with OTP
            $options['otp_code'] = $code;
        }

        if ($this->version > 5 && !empty($this->deviceName)) {
            $options['device_name'] = $this->deviceName;
            if (empty($this->deviceId)) {
                // Example 3: Login with OTP and to enable to omit 2-factor verification
                $options['enable_device_token'] = 'yes';
            } else {
                // Example 4: Login with omitted OTP
                $options['device_id'] = $this->deviceId;
            }
        }

        $data = $this->request('Auth', 'entry.cgi', 'login', $options, $authVersion);

        // save session id
        $this->sessionId = $data->sid ?? null;

        // save device id
        $this->deviceId = $data->did ?? null;

        // save syno token
        $this->synoToken = $data->synotoken ?? null;

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
        $this->request('Auth', 'entry.cgi', 'logout', ['_sid' => $this->sessionId, 'session' => $this->sessionName]);
        $this->sessionId = null;

        return $this;
    }

    /**
     * Refresh SynoToken to avoid CSRF
     * @return string|null
     */
    public function refreshToken()
    {
        $this->log($this->sessionName, 'Refresh SynoToken');
        $data = $this->request('Auth', 'entry.cgi', 'token', ['_sid' => $this->sessionId, 'session' => $this->sessionName]);

        // save syno token
        $this->synoToken = $data->synotoken ?? null;

        return $this->synoToken;
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
     * Get device id (if any) for next login with omitted OTP - see Example 3 & 4 above
     * @return string|null
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set device id (if any) for next login with omitted OTP - see Example 3 & 4 above
     * @param string|null $deviceId
     * @return void
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Get device name (if any) for next login with omitted OTP - see Example 3 & 4 above
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Set device name (if any) for next login with omitted OTP - see Example 3 & 4 above
     * @param string|null $deviceName
     * @return void
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
    }

    /**
     * Get current SynoToken to avoid CSRF (if any)
     * @return string|null
     */
    public function getSynoToken()
    {
        return $this->synoToken;
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
