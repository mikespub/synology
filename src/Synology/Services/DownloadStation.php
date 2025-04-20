<?php

namespace Synology\Services;

/**
 * Class DownloadStation - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation
 * ```
 * $result = $syno->downloadstation()->getinfoStatistic();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation
 * @package Synology\Services
 */
class DownloadStation extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation';
    public const API_VERSION = 1;
    protected ?DownloadStation\BTSearch $btsearchSvc = null;
    protected ?DownloadStation\Info $infoSvc = null;
    protected ?DownloadStation\RSS $rssSvc = null;
    protected ?DownloadStation\Task $taskSvc = null;

    /**
     * Summary of btsearch
     *
     * API: SYNO.DownloadStation.BTSearch
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.BTSearch
     * @return DownloadStation\BTSearch
     */
    public function btsearch()
    {
        $this->btsearchSvc ??= new DownloadStation\BTSearch($this->client);
        return $this->btsearchSvc;
    }

    /**
     * Summary of info
     *
     * API: SYNO.DownloadStation.Info
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.Info
     * @return DownloadStation\Info
     */
    public function info()
    {
        $this->infoSvc ??= new DownloadStation\Info($this->client);
        return $this->infoSvc;
    }

    /**
     * Summary of rss
     *
     * API: SYNO.DownloadStation.RSS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.RSS
     * @return DownloadStation\RSS
     */
    public function rss()
    {
        $this->rssSvc ??= new DownloadStation\RSS($this->client);
        return $this->rssSvc;
    }

    /**
     * Summary of task
     *
     * API: SYNO.DownloadStation.Task
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation#/DownloadStation.Task
     * @return DownloadStation\Task
     */
    public function task()
    {
        $this->taskSvc ??= new DownloadStation\Task($this->client);
        return $this->taskSvc;
    }

    /**
     * Summary of getinfoStatistic
     *
     * API method: SYNO.DownloadStation.Statistic getinfo (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.Statistic-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoStatistic()
    {
        $api = 'Statistic';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
