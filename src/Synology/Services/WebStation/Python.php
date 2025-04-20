<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class Python - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.Python
 * ```
 * $result = $syno->webstation()->python()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Python
 * @package Synology\Services\WebStation
 */
class Python extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.Python';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.WebStation.Python get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Python-get.json
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
     * API method: SYNO.WebStation.Python.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Python.Profile-list.json
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
