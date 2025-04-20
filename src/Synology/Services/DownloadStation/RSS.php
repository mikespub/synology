<?php

namespace Synology\Services\DownloadStation;

use Synology\Services\BaseService;

/**
 * Class RSS - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation.RSS
 * ```
 * $result = $syno->downloadstation()->rss()->listSite();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.RSS
 * @package Synology\Services\DownloadStation
 */
class RSS extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation.RSS';
    public const API_VERSION = 1;

    /**
     * Summary of listSite
     *
     * API method: SYNO.DownloadStation.RSS.Site list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.RSS.Site-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listSite()
    {
        $api = 'Site';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
