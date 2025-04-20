<?php

namespace Synology\Services\DownloadStation2;

use Synology\Services\BaseService;

/**
 * Class Settings - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation2.Settings
 * ```
 * $result = $syno->downloadstation2()->settings()->listFileHosting();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Settings
 * @package Synology\Services\DownloadStation2
 */
class Settings extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation2.Settings';
    public const API_VERSION = 2;

    /**
     * Summary of listFileHosting
     *
     * API method: SYNO.DownloadStation2.Settings.FileHosting list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.FileHosting-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listFileHosting()
    {
        $api = 'FileHosting';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAutoExtraction
     *
     * API method: SYNO.DownloadStation2.Settings.AutoExtraction get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.AutoExtraction-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getAutoExtraction()
    {
        $api = 'AutoExtraction';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getBT
     *
     * API method: SYNO.DownloadStation2.Settings.BT get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.BT-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getBT()
    {
        $api = 'BT';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBTSearch
     *
     * API method: SYNO.DownloadStation2.Settings.BTSearch list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.BTSearch-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listBTSearch()
    {
        $api = 'BTSearch';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getEmule
     *
     * API method: SYNO.DownloadStation2.Settings.Emule get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Emule-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getEmule()
    {
        $api = 'Emule';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getEmuleLocation
     *
     * API method: SYNO.DownloadStation2.Settings.Emule.Location get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Emule.Location-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getEmuleLocation()
    {
        $api = 'Emule.Location';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFtpHttp
     *
     * API method: SYNO.DownloadStation2.Settings.FtpHttp get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.FtpHttp-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getFtpHttp()
    {
        $api = 'FtpHttp';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getGlobal
     *
     * API method: SYNO.DownloadStation2.Settings.Global get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Global-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getGlobal()
    {
        $api = 'Global';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getLocation
     *
     * API method: SYNO.DownloadStation2.Settings.Location get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Location-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getLocation()
    {
        $api = 'Location';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNzb
     *
     * API method: SYNO.DownloadStation2.Settings.Nzb get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Nzb-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getNzb()
    {
        $api = 'Nzb';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getRss
     *
     * API method: SYNO.DownloadStation2.Settings.Rss get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Rss-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getRss()
    {
        $api = 'Rss';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getScheduler
     *
     * API method: SYNO.DownloadStation2.Settings.Scheduler get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Scheduler-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getScheduler()
    {
        $api = 'Scheduler';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
