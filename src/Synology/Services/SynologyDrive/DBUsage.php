<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class DBUsage - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.DBUsage
 * ```
 * $result = $syno->synologydrive()->dbusage()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.DBUsage
 * @package Synology\Services\SynologyDrive
 */
class DBUsage extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.DBUsage';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SynologyDrive.DBUsage get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.DBUsage-get.json
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
