<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Labels - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Labels
 * ```
 * $result = $syno->synologydrive()->labels()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Labels
 * @package Synology\Services\SynologyDrive
 */
class Labels extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Labels';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Labels list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Labels-list.json
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
