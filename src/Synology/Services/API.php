<?php

namespace Synology\Services;

/**
 * Class API - created automatically by ServiceGenerator
 *
 * API: SYNO.API
 * ```
 * $result = $syno->api()->getinfoEncryption();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=API
 * @package Synology\Services
 */
class API extends BaseService
{
    public const API_SERVICE_NAME = 'API';
    public const API_VERSION = 7;
    protected ?API\Auth $authSvc = null;

    /**
     * Summary of auth
     *
     * API: SYNO.API.Auth
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=API#/API.Auth
     * @return API\Auth
     */
    public function auth()
    {
        $this->authSvc ??= new API\Auth($this->client);
        return $this->authSvc;
    }

    /**
     * Summary of getinfoEncryption
     *
     * API method: SYNO.API.Encryption getinfo (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.API.Encryption-getinfo.json
     * @return array<mixed>|bool|string|\stdClass
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
     * @return array<mixed>|bool|string|\stdClass
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
