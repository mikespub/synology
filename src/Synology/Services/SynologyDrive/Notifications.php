<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Notifications - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Notifications
 * ```
 * $result = $syno->synologydrive()->notifications()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Notifications
 * @package Synology\Services\SynologyDrive
 */
class Notifications extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Notifications';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Notifications list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Notifications-list.json
     * @return array<mixed>|bool|string|\stdClass
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
