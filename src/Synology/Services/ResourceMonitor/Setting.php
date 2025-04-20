<?php

namespace Synology\Services\ResourceMonitor;

use Synology\Services\BaseService;

/**
 * Class Setting - created automatically by ServiceGenerator
 *
 * API: SYNO.ResourceMonitor.Setting
 * ```
 * $result = $syno->resourcemonitor()->setting()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor#/ResourceMonitor.Setting
 * @package Synology\Services\ResourceMonitor
 */
class Setting extends BaseService
{
    public const API_SERVICE_NAME = 'ResourceMonitor.Setting';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.ResourceMonitor.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ResourceMonitor.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
