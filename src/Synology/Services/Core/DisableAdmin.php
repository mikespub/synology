<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class DisableAdmin - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.DisableAdmin
 * ```
 * $result = $syno->core()->disableadmin()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DisableAdmin
 * @package Synology\Services\Core
 */
class DisableAdmin extends BaseService
{
    public const API_SERVICE_NAME = 'Core.DisableAdmin';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.DisableAdmin get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DisableAdmin-get.json
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
