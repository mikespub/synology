<?php

namespace Synology\Services\DownloadStation2;

use Synology\Services\BaseService;

/**
 * Class RSS - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation2.RSS
 * ```
 * $result = $syno->downloadstation2()->rss()->listFeed();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.RSS
 * @package Synology\Services\DownloadStation2
 */
class RSS extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation2.RSS';
    public const API_VERSION = 2;

    /**
     * Summary of listFeed
     *
     * API method: SYNO.DownloadStation2.RSS.Feed list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.RSS.Feed-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFeed()
    {
        $api = 'Feed';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
