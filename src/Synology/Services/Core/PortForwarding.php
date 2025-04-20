<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class PortForwarding - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.PortForwarding
 * ```
 * $result = $syno->core()->portforwarding()->getRouterConf();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.PortForwarding
 * @package Synology\Services\Core
 */
class PortForwarding extends BaseService
{
    public const API_SERVICE_NAME = 'Core.PortForwarding';
    public const API_VERSION = 1;

    /**
     * Summary of getRouterConf
     *
     * API method: SYNO.Core.PortForwarding.RouterConf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.PortForwarding.RouterConf-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getRouterConf()
    {
        $api = 'RouterConf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getRouterInfo
     *
     * API method: SYNO.Core.PortForwarding.RouterInfo get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.PortForwarding.RouterInfo-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getRouterInfo()
    {
        $api = 'RouterInfo';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRouterList
     *
     * API method: SYNO.Core.PortForwarding.RouterList list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.PortForwarding.RouterList-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listRouterList()
    {
        $api = 'RouterList';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
