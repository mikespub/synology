<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class QuickConnect - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.QuickConnect
 * ```
 * $result = $syno->core()->quickconnect()->getPermission();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.QuickConnect
 * @package Synology\Services\Core
 */
class QuickConnect extends BaseService
{
    public const API_SERVICE_NAME = 'Core.QuickConnect';
    public const API_VERSION = 1;

    /**
     * Summary of getPermission
     *
     * API method: SYNO.Core.QuickConnect.Permission get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.QuickConnect.Permission-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPermission()
    {
        $api = 'Permission';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getRegisterSite
     *
     * API method: SYNO.Core.QuickConnect.RegisterSite get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.QuickConnect.RegisterSite-get.json
     * @return array|bool|string|\stdClass
     */
    public function getRegisterSite()
    {
        $api = 'RegisterSite';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getUpnp
     *
     * API method: SYNO.Core.QuickConnect.Upnp get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.QuickConnect.Upnp-get.json
     * @return array|bool|string|\stdClass
     */
    public function getUpnp()
    {
        $api = 'Upnp';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
