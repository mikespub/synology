<?php

namespace Synology\Services\Backup;

use Synology\Services\BaseService;

/**
 * Class Config - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup.Config
 * ```
 * $result = $syno->backup()->config()->listAutoBackup();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Config
 * @package Synology\Services\Backup
 */
class Config extends BaseService
{
    public const API_SERVICE_NAME = 'Backup.Config';
    public const API_VERSION = 1;

    /**
     * Summary of listAutoBackup
     *
     * API method: SYNO.Backup.Config.AutoBackup list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Config.AutoBackup-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAutoBackup()
    {
        $api = 'AutoBackup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBackup
     *
     * API method: SYNO.Backup.Config.Backup list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Config.Backup-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBackup()
    {
        $api = 'Backup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
