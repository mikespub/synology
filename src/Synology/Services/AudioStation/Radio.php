<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class Radio - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.Radio
 * ```
 * $result = $syno->audiostation()->radio()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Radio
 * @package Synology\Services\AudioStation
 */
class Radio extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.Radio';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.AudioStation.Radio list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Radio-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
