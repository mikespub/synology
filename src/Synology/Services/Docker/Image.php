<?php

namespace Synology\Services\Docker;

use Synology\Services\BaseService;

/**
 * Class Image - created automatically by ServiceGenerator
 *
 * API: SYNO.Docker.Image
 * ```
 * $result = $syno->docker()->image()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Image
 * @package Synology\Services\Docker
 */
class Image extends BaseService
{
    public const API_SERVICE_NAME = 'Docker.Image';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Docker.Image list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Image-list.json
     * @return array<mixed>|bool|string|\stdClass
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
}
