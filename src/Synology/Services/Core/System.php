<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class System - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.System
 * ```
 * $result = $syno->core()->system()->getStatus();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.System
 * @package Synology\Services\Core
 */
class System extends BaseService
{
    public const API_SERVICE_NAME = 'Core.System';
    public const API_VERSION = 1;

    /**
     * Summary of getStatus
     *
     * API method: SYNO.Core.System.Status get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.System.Status-get.json
     * @return array|bool|string|\stdClass
     */
    public function getStatus()
    {
        $api = 'Status';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProcess
     *
     * API method: SYNO.Core.System.Process list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.System.Process-list.json
     * @return array|bool|string|\stdClass
     */
    public function listProcess()
    {
        $api = 'Process';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProcessGroup
     *
     * API method: SYNO.Core.System.ProcessGroup list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.System.ProcessGroup-list.json
     * @return array|bool|string|\stdClass
     */
    public function listProcessGroup()
    {
        $api = 'ProcessGroup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getResetButton
     *
     * API method: SYNO.Core.System.ResetButton get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.System.ResetButton-get.json
     * @return array|bool|string|\stdClass
     */
    public function getResetButton()
    {
        $api = 'ResetButton';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getHealth
     *
     * API method: SYNO.Core.System.SystemHealth get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.System.SystemHealth-get.json
     * @return array|bool|string|\stdClass
     */
    public function getHealth()
    {
        $api = 'SystemHealth';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getUtilization
     *
     * API method: SYNO.Core.System.Utilization get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.System.Utilization-get.json
     * @return array|bool|string|\stdClass
     */
    public function getUtilization()
    {
        $api = 'Utilization';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
