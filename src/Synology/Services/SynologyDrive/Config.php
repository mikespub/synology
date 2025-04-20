<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Config - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Config
 * ```
 * $result = $syno->synologydrive()->config()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Config
 * @package Synology\Services\SynologyDrive
 */
class Config extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Config';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SynologyDrive.Config get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Config-get.json
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
