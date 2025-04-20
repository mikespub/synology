<?php

namespace Synology\Services\DownloadStation;

use Synology\Services\BaseService;

/**
 * Class Info - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation.Info
 * ```
 * $result = $syno->downloadstation()->info()->getinfo();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.Info
 * @package Synology\Services\DownloadStation
 */
class Info extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation.Info';
    public const API_VERSION = 1;

    /**
     * Summary of getinfo
     *
     * API method: SYNO.DownloadStation.Info getinfo (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.Info-getinfo.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getinfo()
    {
        $api = '';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
