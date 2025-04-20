<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Privilege - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Privilege
 * ```
 * $result = $syno->synologydrive()->privilege()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Privilege
 * @package Synology\Services\SynologyDrive
 */
class Privilege extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Privilege';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Privilege list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Privilege-list.json
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
