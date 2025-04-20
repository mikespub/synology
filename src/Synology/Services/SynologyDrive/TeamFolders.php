<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class TeamFolders - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.TeamFolders
 * ```
 * $result = $syno->synologydrive()->teamfolders()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.TeamFolders
 * @package Synology\Services\SynologyDrive
 */
class TeamFolders extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.TeamFolders';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.TeamFolders list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.TeamFolders-list.json
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
