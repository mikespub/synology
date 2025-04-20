<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Desktop - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Desktop
 * ```
 * $result = $syno->core()->desktop()->getInitdata();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Desktop
 * @package Synology\Services\Core
 */
class Desktop extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Desktop';
    public const API_VERSION = 1;

    /**
     * Summary of getInitdata
     *
     * API method: SYNO.Core.Desktop.Initdata get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Desktop.Initdata-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getInitdata()
    {
        $api = 'Initdata';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getTimeout
     *
     * API method: SYNO.Core.Desktop.Timeout get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Desktop.Timeout-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getTimeout()
    {
        $api = 'Timeout';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
