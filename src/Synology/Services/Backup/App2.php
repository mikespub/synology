<?php

namespace Synology\Services\Backup;

use Synology\Services\BaseService;

/**
 * Class App2 - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup.App2
 * ```
 * $result = $syno->backup()->app2()->listBackup();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.App2
 * @package Synology\Services\Backup
 */
class App2 extends BaseService
{
    public const API_SERVICE_NAME = 'Backup.App2';
    public const API_VERSION = 1;

    /**
     * Summary of listBackup
     *
     * API method: SYNO.Backup.App2.Backup list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.App2.Backup-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listBackup()
    {
        $api = 'Backup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
