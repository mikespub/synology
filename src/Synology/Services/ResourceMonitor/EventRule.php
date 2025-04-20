<?php

namespace Synology\Services\ResourceMonitor;

use Synology\Services\BaseService;

/**
 * Class EventRule - created automatically by ServiceGenerator
 *
 * API: SYNO.ResourceMonitor.EventRule
 * ```
 * $result = $syno->resourcemonitor()->eventrule()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor#/ResourceMonitor.EventRule
 * @package Synology\Services\ResourceMonitor
 */
class EventRule extends BaseService
{
    public const API_SERVICE_NAME = 'ResourceMonitor.EventRule';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.ResourceMonitor.EventRule list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ResourceMonitor.EventRule-list.json
     * @return array<mixed>|bool|string|\stdClass
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
