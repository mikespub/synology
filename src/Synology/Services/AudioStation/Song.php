<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class Song - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.Song
 * ```
 * $result = $syno->audiostation()->song()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Song
 * @package Synology\Services\AudioStation
 */
class Song extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.Song';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.AudioStation.Song list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Song-list.json
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
