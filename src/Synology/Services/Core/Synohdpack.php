<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Synohdpack - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Synohdpack
 * ```
 * $result = $syno->core()->synohdpack()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Synohdpack
 * @package Synology\Services\Core
 */
class Synohdpack extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Synohdpack';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.Synohdpack get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Synohdpack-get.json
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
