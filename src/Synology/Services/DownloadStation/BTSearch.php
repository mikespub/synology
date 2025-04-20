<?php

namespace Synology\Services\DownloadStation;

use Synology\Services\BaseService;

/**
 * Class BTSearch - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation.BTSearch
 * ```
 * $result = $syno->downloadstation()->btsearch()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.BTSearch
 * @package Synology\Services\DownloadStation
 */
class BTSearch extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation.BTSearch';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.DownloadStation.BTSearch list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.BTSearch-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
