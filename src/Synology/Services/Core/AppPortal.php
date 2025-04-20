<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class AppPortal - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.AppPortal
 * ```
 * $result = $syno->core()->appportal()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.AppPortal
 * @package Synology\Services\Core
 */
class AppPortal extends BaseService
{
    public const API_SERVICE_NAME = 'Core.AppPortal';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Core.AppPortal list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppPortal-list.json
     * @return array<mixed>|bool|string|\stdClass
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
     * Summary of listAccessControl
     *
     * API method: SYNO.Core.AppPortal.AccessControl list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppPortal.AccessControl-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listAccessControl()
    {
        $api = 'AccessControl';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getConfig
     *
     * API method: SYNO.Core.AppPortal.Config get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppPortal.Config-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getConfig()
    {
        $api = 'Config';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listReverseProxy
     *
     * API method: SYNO.Core.AppPortal.ReverseProxy list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppPortal.ReverseProxy-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listReverseProxy()
    {
        $api = 'ReverseProxy';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
