<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Terminal - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Terminal
 * ```
 * $result = $syno->core()->terminal()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Terminal
 * @package Synology\Services\Core
 */
class Terminal extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Terminal';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.Terminal get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Terminal-get.json
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
}
