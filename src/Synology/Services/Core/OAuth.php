<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class OAuth - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.OAuth
 * ```
 * $result = $syno->core()->oauth()->getScope();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.OAuth
 * @package Synology\Services\Core
 */
class OAuth extends BaseService
{
    public const API_SERVICE_NAME = 'Core.OAuth';
    public const API_VERSION = 1;

    /**
     * Summary of getScope
     *
     * API method: SYNO.Core.OAuth.Scope get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.OAuth.Scope-get.json
     * @return array|bool|string|\stdClass
     */
    public function getScope()
    {
        $api = 'Scope';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getServer
     *
     * API method: SYNO.Core.OAuth.Server get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.OAuth.Server-get.json
     * @return array|bool|string|\stdClass
     */
    public function getServer()
    {
        $api = 'Server';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
