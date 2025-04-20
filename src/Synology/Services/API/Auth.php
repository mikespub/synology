<?php

namespace Synology\Services\API;

use Synology\Services\BaseService;

/**
 * Class Auth - created automatically by ServiceGenerator
 *
 * API: SYNO.API.Auth
 * ```
 * $result = $syno->api()->auth()->login();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=API#/API.Auth
 * @package Synology\Services\API
 */
class Auth extends BaseService
{
    public const API_SERVICE_NAME = 'API.Auth';
    public const API_VERSION = 7;

    /**
     * Summary of login
     *
     * API method: SYNO.API.Auth login (7)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth-login.json
     * @return array|bool|string|\stdClass
     */
    public function login(string $account = "username", string $passwd = "password", string $session = "default", string $format = "sid")
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'login';
        $version = 7;
        $params = [
            'account' => $account,
            'passwd' => $passwd,
            'session' => $session,
            'format' => $format,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getKey
     *
     * API method: SYNO.API.Auth.Key get (7)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth.Key-get.json
     * @return array|bool|string|\stdClass
     */
    public function getKey()
    {
        $api = 'Key';
        $path = static::API_PATH;
        $method = 'get';
        $version = 7;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getType
     *
     * API method: SYNO.API.Auth.Type get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth.Type-get.json
     * @return array|bool|string|\stdClass
     */
    public function getType()
    {
        $api = 'Type';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getUIConfig
     *
     * API method: SYNO.API.Auth.UIConfig get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth.UIConfig-get.json
     * @return array|bool|string|\stdClass
     */
    public function getUIConfig()
    {
        $api = 'UIConfig';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
