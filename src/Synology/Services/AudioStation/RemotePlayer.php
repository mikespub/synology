<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class RemotePlayer - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.RemotePlayer
 * ```
 * $result = $syno->audiostation()->remoteplayer()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.RemotePlayer
 * @package Synology\Services\AudioStation
 */
class RemotePlayer extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.RemotePlayer';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.AudioStation.RemotePlayer list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.RemotePlayer-list.json
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

    /**
     * Summary of getinfo
     *
     * API method: SYNO.AudioStation.RemotePlayer getinfo (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.RemotePlayer-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfo()
    {
        $api = '';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
