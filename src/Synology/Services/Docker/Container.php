<?php

namespace Synology\Services\Docker;

use Synology\Services\BaseService;

/**
 * Class Container - created automatically by ServiceGenerator
 *
 * API: SYNO.Docker.Container
 * ```
 * $result = $syno->docker()->container()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Container
 * @package Synology\Services\Docker
 */
class Container extends BaseService
{
    public const API_SERVICE_NAME = 'Docker.Container';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Docker.Container list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Container-list.json
     * @return array|bool|string|\stdClass
     */
    public function list(int $offset = 0, int $limit = 10)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getResource
     *
     * API method: SYNO.Docker.Container.Resource get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Container.Resource-get.json
     * @return array|bool|string|\stdClass
     */
    public function getResource()
    {
        $api = 'Resource';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
