<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class FileHandle - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.FileHandle
 * ```
 * $result = $syno->core()->filehandle()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.FileHandle
 * @package Synology\Services\Core
 */
class FileHandle extends BaseService
{
    public const API_SERVICE_NAME = 'Core.FileHandle';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.FileHandle get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileHandle-get.json
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
