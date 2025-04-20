<?php

namespace Synology\Services\DownloadStation2;

use Synology\Services\BaseService;

/**
 * Class Package - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation2.Package
 * ```
 * $result = $syno->downloadstation2()->package()->getInfo();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Package
 * @package Synology\Services\DownloadStation2
 */
class Package extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation2.Package';
    public const API_VERSION = 2;

    /**
     * Summary of getInfo
     *
     * API method: SYNO.DownloadStation2.Package.Info get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Package.Info-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listModule
     *
     * API method: SYNO.DownloadStation2.Package.Module list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Package.Module-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listModule()
    {
        $api = 'Module';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getService
     *
     * API method: SYNO.DownloadStation2.Package.Service get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Package.Service-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getService()
    {
        $api = 'Service';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
