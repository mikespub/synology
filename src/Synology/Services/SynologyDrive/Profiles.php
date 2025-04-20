<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Profiles - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Profiles
 * ```
 * $result = $syno->synologydrive()->profiles()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Profiles
 * @package Synology\Services\SynologyDrive
 */
class Profiles extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Profiles';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Profiles list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Profiles-list.json
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
