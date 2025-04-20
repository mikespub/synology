<?php

namespace Synology\Services;

/**
 * Class OAUTH - created automatically by ServiceGenerator
 *
 * API: SYNO.OAUTH
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH
 * @package Synology\Services
 */
class OAUTH extends BaseService
{
    public const API_SERVICE_NAME = 'OAUTH';
    public const API_VERSION = 1;

    /**
     * Summary of listClient
     *
     * API method: SYNO.OAUTH.Client list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Client-list.json
     * @return array|bool|string|\stdClass
     */
    public function listClient()
    {
        $api = 'Client';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getCommon
     *
     * API method: SYNO.OAUTH.Common get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Common-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCommon()
    {
        $api = 'Common';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLog
     *
     * API method: SYNO.OAUTH.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Log-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLog()
    {
        $api = 'Log';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listToken
     *
     * API method: SYNO.OAUTH.Token list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Token-list.json
     * @return array|bool|string|\stdClass
     */
    public function listToken()
    {
        $api = 'Token';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
