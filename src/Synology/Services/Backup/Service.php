<?php

namespace Synology\Services\Backup;

use Synology\Services\BaseService;

/**
 * Class Service - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup.Service
 * ```
 * $result = $syno->backup()->service()->getNetworkBackup();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Service
 * @package Synology\Services\Backup
 */
class Service extends BaseService
{
    public const API_SERVICE_NAME = 'Backup.Service';
    public const API_VERSION = 1;

    /**
     * Summary of getNetworkBackup
     *
     * API method: SYNO.Backup.Service.NetworkBackup get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Service.NetworkBackup-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getNetworkBackup()
    {
        $api = 'NetworkBackup';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
