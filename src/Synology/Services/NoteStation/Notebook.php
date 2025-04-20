<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Notebook - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Notebook
 * ```
 * $result = $syno->notestation()->notebook()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Notebook
 * @package Synology\Services\NoteStation
 */
class Notebook extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Notebook';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.NoteStation.Notebook list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Notebook-list.json
     * @return array<mixed>|bool|string|\stdClass
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
