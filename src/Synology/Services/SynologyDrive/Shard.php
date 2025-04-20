<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Shard - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Shard
 * ```
 * $result = $syno->synologydrive()->shard()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Shard
 * @package Synology\Services\SynologyDrive
 */
class Shard extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Shard';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SynologyDrive.Shard get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Shard-get.json
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
