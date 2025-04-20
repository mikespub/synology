<?php

namespace Synology\Services\Office;

use Synology\Services\BaseService;

/**
 * Class Shard - created automatically by ServiceGenerator
 *
 * API: SYNO.Office.Shard
 * ```
 * $result = $syno->office()->shard()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Shard
 * @package Synology\Services\Office
 */
class Shard extends BaseService
{
    public const API_SERVICE_NAME = 'Office.Shard';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Office.Shard get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard-get.json
     * @return array|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfo
     *
     * API method: SYNO.Office.Shard.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSession
     *
     * API method: SYNO.Office.Shard.Session get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard.Session-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSession()
    {
        $api = 'Session';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getToken
     *
     * API method: SYNO.Office.Shard.Token get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard.Token-get.json
     * @return array|bool|string|\stdClass
     */
    public function getToken()
    {
        $api = 'Token';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
