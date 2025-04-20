<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Info - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Info
 * ```
 * $result = $syno->synologydrive()->info()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Info
 * @package Synology\Services\SynologyDrive
 */
class Info extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Info';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SynologyDrive.Info get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Info-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
