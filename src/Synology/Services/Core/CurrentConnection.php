<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class CurrentConnection - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.CurrentConnection
 * ```
 * $result = $syno->core()->currentconnection()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.CurrentConnection
 * @package Synology\Services\Core
 */
class CurrentConnection extends BaseService
{
    public const API_SERVICE_NAME = 'Core.CurrentConnection';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Core.CurrentConnection list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.CurrentConnection-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
