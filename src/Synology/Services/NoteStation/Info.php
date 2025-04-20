<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Info - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Info
 * ```
 * $result = $syno->notestation()->info()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Info
 * @package Synology\Services\NoteStation
 */
class Info extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Info';
    public const API_VERSION = 3;

    /**
     * Summary of get
     *
     * API method: SYNO.NoteStation.Info get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Info-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
