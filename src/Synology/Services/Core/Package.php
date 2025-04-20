<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Package - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Package
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Package
 * @package Synology\Services\Core
 */
class Package extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Package';
    public const API_VERSION = 1;

    /**
     * Summary of getAutoUpgradeProgress
     *
     * API method: SYNO.Core.Package.AutoUpgrade.Progress get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.AutoUpgrade.Progress-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAutoUpgradeProgress()
    {
        $api = 'AutoUpgrade.Progress';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFakeIFrame
     *
     * API method: SYNO.Core.Package.FakeIFrame get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.FakeIFrame-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFakeIFrame()
    {
        $api = 'FakeIFrame';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFeed
     *
     * API method: SYNO.Core.Package.Feed list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.Feed-list.json
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

    /**
     * Summary of getInfo
     *
     * API method: SYNO.Core.Package.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getLog
     *
     * API method: SYNO.Core.Package.Log get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.Log-get.json
     * @return array|bool|string|\stdClass
     */
    public function getLog(string $name = "required")
    {
        $api = 'Log';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
            'name' => json_encode($name, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMyDS
     *
     * API method: SYNO.Core.Package.MyDS get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.MyDS-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMyDS()
    {
        $api = 'MyDS';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listServer
     *
     * API method: SYNO.Core.Package.Server list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.Server-list.json
     * @return array|bool|string|\stdClass
     */
    public function listServer()
    {
        $api = 'Server';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSetting
     *
     * API method: SYNO.Core.Package.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSetting()
    {
        $api = 'Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
