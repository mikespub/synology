<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class RecycleBin - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.RecycleBin
 * ```
 * $result = $syno->core()->recyclebin()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.RecycleBin
 * @package Synology\Services\Core
 */
class RecycleBin extends BaseService
{
    public const API_SERVICE_NAME = 'Core.RecycleBin';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.RecycleBin get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.RecycleBin-get.json
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

    /**
     * Summary of getUser
     *
     * API method: SYNO.Core.RecycleBin.User get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.RecycleBin.User-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getUser()
    {
        $api = 'User';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
