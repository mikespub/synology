<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Note - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Note
 * ```
 * $result = $syno->notestation()->note()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Note
 * @package Synology\Services\NoteStation
 */
class Note extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Note';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.NoteStation.Note list (4)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Note-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 4;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
