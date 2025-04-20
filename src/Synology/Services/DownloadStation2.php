<?php

namespace Synology\Services;

/**
 * Class DownloadStation2 - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation2
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2
 * @package Synology\Services
 */
class DownloadStation2 extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation2';
    public const API_VERSION = 2;

    /**
     * Summary of listCaptcha
     *
     * API method: SYNO.DownloadStation2.Captcha list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Captcha-list.json
     * @return array|bool|string|\stdClass
     */
    public function listCaptcha()
    {
        $api = 'Captcha';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPackageInfo
     *
     * API method: SYNO.DownloadStation2.Package.Info get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Package.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPackageInfo()
    {
        $api = 'Package.Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPackageModule
     *
     * API method: SYNO.DownloadStation2.Package.Module list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Package.Module-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPackageModule()
    {
        $api = 'Package.Module';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPackageService
     *
     * API method: SYNO.DownloadStation2.Package.Service get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Package.Service-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPackageService()
    {
        $api = 'Package.Service';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRSSFeed
     *
     * API method: SYNO.DownloadStation2.RSS.Feed list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.RSS.Feed-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRSSFeed()
    {
        $api = 'RSS.Feed';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSettingsFileHosting
     *
     * API method: SYNO.DownloadStation2.Settings.FileHosting list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.FileHosting-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSettingsFileHosting()
    {
        $api = 'Settings.FileHosting';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsAutoExtraction
     *
     * API method: SYNO.DownloadStation2.Settings.AutoExtraction get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.AutoExtraction-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsAutoExtraction()
    {
        $api = 'Settings.AutoExtraction';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsBT
     *
     * API method: SYNO.DownloadStation2.Settings.BT get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.BT-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsBT()
    {
        $api = 'Settings.BT';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSettingsBTSearch
     *
     * API method: SYNO.DownloadStation2.Settings.BTSearch list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.BTSearch-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSettingsBTSearch()
    {
        $api = 'Settings.BTSearch';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsEmule
     *
     * API method: SYNO.DownloadStation2.Settings.Emule get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Emule-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsEmule()
    {
        $api = 'Settings.Emule';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsEmuleLocation
     *
     * API method: SYNO.DownloadStation2.Settings.Emule.Location get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Emule.Location-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsEmuleLocation()
    {
        $api = 'Settings.Emule.Location';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsFtpHttp
     *
     * API method: SYNO.DownloadStation2.Settings.FtpHttp get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.FtpHttp-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsFtpHttp()
    {
        $api = 'Settings.FtpHttp';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsGlobal
     *
     * API method: SYNO.DownloadStation2.Settings.Global get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Global-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsGlobal()
    {
        $api = 'Settings.Global';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsLocation
     *
     * API method: SYNO.DownloadStation2.Settings.Location get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Location-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsLocation()
    {
        $api = 'Settings.Location';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsNzb
     *
     * API method: SYNO.DownloadStation2.Settings.Nzb get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Nzb-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsNzb()
    {
        $api = 'Settings.Nzb';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsRss
     *
     * API method: SYNO.DownloadStation2.Settings.Rss get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Rss-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsRss()
    {
        $api = 'Settings.Rss';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingsScheduler
     *
     * API method: SYNO.DownloadStation2.Settings.Scheduler get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Settings.Scheduler-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingsScheduler()
    {
        $api = 'Settings.Scheduler';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTask
     *
     * API method: SYNO.DownloadStation2.Task list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Task-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTask()
    {
        $api = 'Task';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getTaskStatistic
     *
     * API method: SYNO.DownloadStation2.Task.Statistic get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Task.Statistic-get.json
     * @return array|bool|string|\stdClass
     */
    public function getTaskStatistic()
    {
        $api = 'Task.Statistic';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
