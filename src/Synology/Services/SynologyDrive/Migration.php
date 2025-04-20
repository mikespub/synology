<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Migration - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Migration
 * ```
 * $result = $syno->synologydrive()->migration()->listUserHome();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Migration
 * @package Synology\Services\SynologyDrive
 */
class Migration extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Migration';
    public const API_VERSION = 1;

    /**
     * Summary of listUserHome
     *
     * API method: SYNO.SynologyDrive.Migration.UserHome list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Migration.UserHome-list.json
     * @return array|bool|string|\stdClass
     */
    public function listUserHome()
    {
        $api = 'UserHome';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
