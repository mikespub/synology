<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class Playlist - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.Playlist
 * ```
 * $result = $syno->audiostation()->playlist()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Playlist
 * @package Synology\Services\AudioStation
 */
class Playlist extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.Playlist';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.AudioStation.Playlist list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Playlist-list.json
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
