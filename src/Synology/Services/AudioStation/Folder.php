<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class Folder - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.Folder
 * ```
 * $result = $syno->audiostation()->folder()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Folder
 * @package Synology\Services\AudioStation
 */
class Folder extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.Folder';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.AudioStation.Folder list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Folder-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
