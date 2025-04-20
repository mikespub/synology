<?php

namespace Synology\Services;

/**
 * Class API - created automatically by ServiceGenerator
 *
 * API: SYNO.API
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=API
 * @package Synology\Services
 */
class API extends BaseService
{
    public const API_SERVICE_NAME = 'API';
    public const API_VERSION = 7;

    /**
     * Summary of loginAuth
     *
     * API method: SYNO.API.Auth login (7)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth-login.json
     * @return array|bool|string|\stdClass
     */
    public function loginAuth()
    {
        $api = 'Auth';
        $path = static::API_PATH;
        $method = 'login';
        $version = 7;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAuthKey
     *
     * API method: SYNO.API.Auth.Key get (7)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth.Key-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAuthKey()
    {
        $api = 'Auth.Key';
        $path = static::API_PATH;
        $method = 'get';
        $version = 7;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAuthType
     *
     * API method: SYNO.API.Auth.Type get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth.Type-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAuthType()
    {
        $api = 'Auth.Type';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAuthUIConfig
     *
     * API method: SYNO.API.Auth.UIConfig get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Auth.UIConfig-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAuthUIConfig()
    {
        $api = 'Auth.UIConfig';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getinfoEncryption
     *
     * API method: SYNO.API.Encryption getinfo (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Encryption-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoEncryption()
    {
        $api = 'Encryption';
        $path = static::API_PATH;
        $method = 'getinfo';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of queryInfo
     *
     * API method: SYNO.API.Info query (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Info-query.json
     * @return array|bool|string|\stdClass
     */
    public function queryInfo(string $query = "all")
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'query';
        $version = 1;
        $params = [
            'query' => json_encode($query, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
