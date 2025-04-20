<?php

namespace Synology\Services\DownloadStation2;

use Synology\Services\BaseService;

/**
 * Class Task - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation2.Task
 * ```
 * $result = $syno->downloadstation2()->task()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Task
 * @package Synology\Services\DownloadStation2
 */
class Task extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation2.Task';
    public const API_VERSION = 2;

    /**
     * Summary of list
     *
     * API method: SYNO.DownloadStation2.Task list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Task-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getStatistic
     *
     * API method: SYNO.DownloadStation2.Task.Statistic get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Task.Statistic-get.json
     * @return array|bool|string|\stdClass
     */
    public function getStatistic()
    {
        $api = 'Statistic';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
