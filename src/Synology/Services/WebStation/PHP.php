<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class PHP - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.PHP
 * ```
 * $result = $syno->webstation()->php()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.PHP
 * @package Synology\Services\WebStation
 */
class PHP extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.PHP';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.WebStation.PHP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.PHP-get.json
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
     * Summary of listProfile
     *
     * API method: SYNO.WebStation.PHP.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.PHP.Profile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listProfile()
    {
        $api = 'Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
