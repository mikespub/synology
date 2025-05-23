<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class Genre - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.Genre
 * ```
 * $result = $syno->audiostation()->genre()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Genre
 * @package Synology\Services\AudioStation
 */
class Genre extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.Genre';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.AudioStation.Genre list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Genre-list.json
     * @return array<mixed>|bool|string|\stdClass
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
