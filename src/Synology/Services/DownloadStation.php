<?php

namespace Synology\Services;

/**
 * Class DownloadStation - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation
 * @package Synology\Services
 */
class DownloadStation extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation';
    public const API_VERSION = 1;

    /**
     * Summary of listBTSearch
     *
     * API method: SYNO.DownloadStation.BTSearch list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.BTSearch-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBTSearch()
    {
        $api = 'BTSearch';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getinfoInfo
     *
     * API method: SYNO.DownloadStation.Info getinfo (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.Info-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoInfo()
    {
        $api = 'Info';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRSSSite
     *
     * API method: SYNO.DownloadStation.RSS.Site list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.RSS.Site-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRSSSite()
    {
        $api = 'RSS.Site';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
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

    /**
     * Summary of listTask
     *
     * API method: SYNO.DownloadStation.Task list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.Task-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTask()
    {
        $api = 'Task';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getinfoTask
     *
     * API method: SYNO.DownloadStation.Task getinfo (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation.Task-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoTask()
    {
        $api = 'Task';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
