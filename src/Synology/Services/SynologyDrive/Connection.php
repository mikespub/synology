<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Connection - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Connection
 * ```
 * $result = $syno->synologydrive()->connection()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Connection
 * @package Synology\Services\SynologyDrive
 */
class Connection extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Connection';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Connection list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Connection-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
