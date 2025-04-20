<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class AppNotify - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.AppNotify
 * ```
 * $result = $syno->core()->appnotify()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.AppNotify
 * @package Synology\Services\Core
 */
class AppNotify extends BaseService
{
    public const API_SERVICE_NAME = 'Core.AppNotify';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.AppNotify get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppNotify-get.json
     * @return array<mixed>|bool|string|\stdClass
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
