<?php

namespace Synology\Services\SynologyDriveShareSync;

use Synology\Services\BaseService;

/**
 * Class Connection - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDriveShareSync.Connection
 * ```
 * $result = $syno->synologydrivesharesync()->connection()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDriveShareSync#/SynologyDriveShareSync.Connection
 * @package Synology\Services\SynologyDriveShareSync
 */
class Connection extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDriveShareSync.Connection';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDriveShareSync.Connection list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDriveShareSync.Connection-list.json
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
