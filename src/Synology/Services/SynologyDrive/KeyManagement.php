<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class KeyManagement - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.KeyManagement
 * ```
 * $result = $syno->synologydrive()->keymanagement()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.KeyManagement
 * @package Synology\Services\SynologyDrive
 */
class KeyManagement extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.KeyManagement';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.KeyManagement list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.KeyManagement-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
