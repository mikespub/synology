<?php

namespace Synology\Services\FileStation;

use Synology\Services\BaseService;

/**
 * Class Settings - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation.Settings
 * ```
 * $result = $syno->filestation()->settings()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Settings
 * @package Synology\Services\FileStation
 */
class Settings extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation.Settings';
    public const API_VERSION = 3;

    /**
     * Summary of get
     *
     * API method: SYNO.FileStation.Settings get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Settings-get.json
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
}
