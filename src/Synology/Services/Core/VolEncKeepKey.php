<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class VolEncKeepKey - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.VolEncKeepKey
 * ```
 * $result = $syno->core()->volenckeepkey()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.VolEncKeepKey
 * @package Synology\Services\Core
 */
class VolEncKeepKey extends BaseService
{
    public const API_SERVICE_NAME = 'Core.VolEncKeepKey';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.VolEncKeepKey get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.VolEncKeepKey-get.json
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
