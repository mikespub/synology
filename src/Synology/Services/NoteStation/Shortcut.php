<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Shortcut - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Shortcut
 * ```
 * $result = $syno->notestation()->shortcut()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Shortcut
 * @package Synology\Services\NoteStation
 */
class Shortcut extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Shortcut';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.NoteStation.Shortcut list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Shortcut-list.json
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
