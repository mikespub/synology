<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class DSMNotify - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.DSMNotify
 * ```
 * $result = $syno->core()->dsmnotify()->getStrings();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DSMNotify
 * @package Synology\Services\Core
 */
class DSMNotify extends BaseService
{
    public const API_SERVICE_NAME = 'Core.DSMNotify';
    public const API_VERSION = 1;

    /**
     * Summary of getStrings
     *
     * API method: SYNO.Core.DSMNotify.Strings get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DSMNotify.Strings-get.json
     * @return array|bool|string|\stdClass
     */
    public function getStrings()
    {
        $api = 'Strings';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
