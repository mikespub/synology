<?php

namespace Synology\Services\Docker;

use Synology\Services\BaseService;

/**
 * Class Project - created automatically by ServiceGenerator
 *
 * API: SYNO.Docker.Project
 * ```
 * $result = $syno->docker()->project()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Project
 * @package Synology\Services\Docker
 */
class Project extends BaseService
{
    public const API_SERVICE_NAME = 'Docker.Project';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Docker.Project list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Project-list.json
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
}
