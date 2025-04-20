<?php

namespace Synology\Services\DownloadStation;

use Synology\Services\BaseService;

/**
 * Class Task - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation.Task
 * ```
 * $result = $syno->downloadstation()->task()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.Task
 * @package Synology\Services\DownloadStation
 */
class Task extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation.Task';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.DownloadStation.Task list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.Task-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getinfo
     *
     * API method: SYNO.DownloadStation.Task getinfo (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.Task-getinfo.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getinfo()
    {
        $api = '';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
