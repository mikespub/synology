<?php

namespace Synology\Services;

/**
 * Class ResourceMonitor - created automatically by ServiceGenerator
 *
 * API: SYNO.ResourceMonitor
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor
 * @package Synology\Services
 */
class ResourceMonitor extends BaseService
{
    public const API_SERVICE_NAME = 'ResourceMonitor';
    public const API_VERSION = 1;

    /**
     * Summary of listEventRule
     *
     * API method: SYNO.ResourceMonitor.EventRule list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ResourceMonitor.EventRule-list.json
     * @return array|bool|string|\stdClass
     */
    public function listEventRule()
    {
        $api = 'EventRule';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLog
     *
     * API method: SYNO.ResourceMonitor.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ResourceMonitor.Log-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLog()
    {
        $api = 'Log';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSetting
     *
     * API method: SYNO.ResourceMonitor.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ResourceMonitor.Setting-get.json
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
