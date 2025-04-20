<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Settings - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Settings
 * ```
 * $result = $syno->synologydrive()->settings()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Settings
 * @package Synology\Services\SynologyDrive
 */
class Settings extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Settings';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Settings list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Settings-list.json
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
