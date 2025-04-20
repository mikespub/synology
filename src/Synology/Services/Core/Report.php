<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Report - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Report
 * ```
 * $result = $syno->core()->report()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Report
 * @package Synology\Services\Core
 */
class Report extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Report';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Core.Report list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Report-list.json
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

    /**
     * Summary of getConfig
     *
     * API method: SYNO.Core.Report.Config get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Report.Config-get.json
     * @return array|bool|string|\stdClass
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
}
