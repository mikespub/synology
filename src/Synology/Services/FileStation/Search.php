<?php

namespace Synology\Services\FileStation;

use Synology\Services\BaseService;

/**
 * Class Search - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation.Search
 * ```
 * $result = $syno->filestation()->search()->getHistory();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Search
 * @package Synology\Services\FileStation
 */
class Search extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation.Search';
    public const API_VERSION = 3;

    /**
     * Summary of getHistory
     *
     * API method: SYNO.FileStation.Search.History get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Search.History-get.json
     * @return array|bool|string|\stdClass
     */
    public function getHistory()
    {
        $api = 'History';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
