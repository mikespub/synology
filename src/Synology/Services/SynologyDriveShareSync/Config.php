<?php

namespace Synology\Services\SynologyDriveShareSync;

use Synology\Services\BaseService;

/**
 * Class Config - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDriveShareSync.Config
 * ```
 * $result = $syno->synologydrivesharesync()->config()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDriveShareSync#/SynologyDriveShareSync.Config
 * @package Synology\Services\SynologyDriveShareSync
 */
class Config extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDriveShareSync.Config';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SynologyDriveShareSync.Config get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDriveShareSync.Config-get.json
     * @return array<mixed>|bool|string|\stdClass
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
