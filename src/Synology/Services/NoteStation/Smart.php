<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Smart - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Smart
 * ```
 * $result = $syno->notestation()->smart()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Smart
 * @package Synology\Services\NoteStation
 */
class Smart extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Smart';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.NoteStation.Smart list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Smart-list.json
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
