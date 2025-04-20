<?php

namespace Synology\Services\SDS;

use Synology\Services\BaseService;

/**
 * Class Backup - created automatically by ServiceGenerator
 *
 * API: SYNO.SDS.Backup
 * ```
 * $result = $syno->sds()->backup()->listClientCommonLog();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SDS#/SDS.Backup
 * @package Synology\Services\SDS
 */
class Backup extends BaseService
{
    public const API_SERVICE_NAME = 'SDS.Backup';
    public const API_VERSION = 1;

    /**
     * Summary of listClientCommonLog
     *
     * API method: SYNO.SDS.Backup.Client.Common.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SDS.Backup.Client.Common.Log-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listClientCommonLog(int $offset = 0, int $limit = 10)
    {
        $api = 'Client.Common.Log';
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
     * Summary of listClientExploreJob
     *
     * API method: SYNO.SDS.Backup.Client.Explore.Job list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SDS.Backup.Client.Explore.Job-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listClientExploreJob()
    {
        $api = 'Client.Explore.Job';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
