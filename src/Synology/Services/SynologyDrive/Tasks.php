<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Tasks - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Tasks
 * ```
 * $result = $syno->synologydrive()->tasks()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Tasks
 * @package Synology\Services\SynologyDrive
 */
class Tasks extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Tasks';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Tasks list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Tasks-list.json
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
