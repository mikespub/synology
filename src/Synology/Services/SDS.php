<?php

namespace Synology\Services;

/**
 * Class SDS - created automatically by ServiceGenerator
 *
 * API: SYNO.SDS
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SDS
 * @package Synology\Services
 */
class SDS extends BaseService
{
    public const API_SERVICE_NAME = 'SDS';
    public const API_VERSION = 1;

    /**
     * Summary of listBackupClientCommonLog
     *
     * API method: SYNO.SDS.Backup.Client.Common.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SDS.Backup.Client.Common.Log-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBackupClientCommonLog(int $offset = 0, int $limit = 10)
    {
        $api = 'Backup.Client.Common.Log';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBackupClientExploreJob
     *
     * API method: SYNO.SDS.Backup.Client.Explore.Job list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SDS.Backup.Client.Explore.Job-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBackupClientExploreJob()
    {
        $api = 'Backup.Client.Explore.Job';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
