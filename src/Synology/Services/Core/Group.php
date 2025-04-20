<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Group - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Group
 * ```
 * $result = $syno->core()->group()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Group
 * @package Synology\Services\Core
 */
class Group extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Group';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Core.Group list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Group-list.json
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
     * Summary of listValidLocalAdmin
     *
     * API method: SYNO.Core.Group.ValidLocalAdmin list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Group.ValidLocalAdmin-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listValidLocalAdmin()
    {
        $api = 'ValidLocalAdmin';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
