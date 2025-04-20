<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class Pin - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.Pin
 * ```
 * $result = $syno->audiostation()->pin()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Pin
 * @package Synology\Services\AudioStation
 */
class Pin extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.Pin';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.AudioStation.Pin list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Pin-list.json
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
