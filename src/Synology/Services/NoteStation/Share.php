<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Share - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Share
 * ```
 * $result = $syno->notestation()->share()->listPriv();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Share
 * @package Synology\Services\NoteStation
 */
class Share extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Share';
    public const API_VERSION = 3;

    /**
     * Summary of listPriv
     *
     * API method: SYNO.NoteStation.Share.Priv list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Share.Priv-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listPriv()
    {
        $api = 'Priv';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
