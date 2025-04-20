<?php

namespace Synology\Services\ResourceMonitor;

use Synology\Services\BaseService;

/**
 * Class Log - created automatically by ServiceGenerator
 *
 * API: SYNO.ResourceMonitor.Log
 * ```
 * $result = $syno->resourcemonitor()->log()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor#/ResourceMonitor.Log
 * @package Synology\Services\ResourceMonitor
 */
class Log extends BaseService
{
    public const API_SERVICE_NAME = 'ResourceMonitor.Log';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.ResourceMonitor.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ResourceMonitor.Log-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
