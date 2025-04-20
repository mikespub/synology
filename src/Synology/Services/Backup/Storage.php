<?php

namespace Synology\Services\Backup;

use Synology\Services\BaseService;

/**
 * Class Storage - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup.Storage
 * ```
 * $result = $syno->backup()->storage()->listShareLocal();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Storage
 * @package Synology\Services\Backup
 */
class Storage extends BaseService
{
    public const API_SERVICE_NAME = 'Backup.Storage';
    public const API_VERSION = 1;

    /**
     * Summary of listShareLocal
     *
     * API method: SYNO.Backup.Storage.Share.Local list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Storage.Share.Local-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listShareLocal()
    {
        $api = 'Share.Local';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
