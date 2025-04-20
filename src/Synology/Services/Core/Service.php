<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Service - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Service
 * ```
 * $result = $syno->core()->service()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Service
 * @package Synology\Services\Core
 */
class Service extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Service';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.Service get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Service-get.json
     * @return array|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getConf
     *
     * API method: SYNO.Core.Service.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Service.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getConf()
    {
        $api = 'Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
