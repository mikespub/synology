<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Sharing - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Sharing
 * ```
 * $result = $syno->core()->sharing()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Sharing
 * @package Synology\Services\Core
 */
class Sharing extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Sharing';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Core.Sharing list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Sharing-list.json
     * @return array<mixed>|bool|string|\stdClass
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

    /**
     * Summary of getInitdata
     *
     * API method: SYNO.Core.Sharing.Initdata get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Sharing.Initdata-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getInitdata()
    {
        $api = 'Initdata';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSession
     *
     * API method: SYNO.Core.Sharing.Session get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Sharing.Session-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSession()
    {
        $api = 'Session';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
