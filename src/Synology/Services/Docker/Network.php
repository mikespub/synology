<?php

namespace Synology\Services\Docker;

use Synology\Services\BaseService;

/**
 * Class Network - created automatically by ServiceGenerator
 *
 * API: SYNO.Docker.Network
 * ```
 * $result = $syno->docker()->network()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Network
 * @package Synology\Services\Docker
 */
class Network extends BaseService
{
    public const API_SERVICE_NAME = 'Docker.Network';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Docker.Network list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Network-list.json
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
