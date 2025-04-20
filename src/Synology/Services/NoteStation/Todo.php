<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Todo - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Todo
 * ```
 * $result = $syno->notestation()->todo()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Todo
 * @package Synology\Services\NoteStation
 */
class Todo extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Todo';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.NoteStation.Todo list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Todo-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
