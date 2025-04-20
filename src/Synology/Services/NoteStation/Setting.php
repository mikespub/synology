<?php

namespace Synology\Services\NoteStation;

use Synology\Services\BaseService;

/**
 * Class Setting - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation.Setting
 * ```
 * $result = $syno->notestation()->setting()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Setting
 * @package Synology\Services\NoteStation
 */
class Setting extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation.Setting';
    public const API_VERSION = 3;

    /**
     * Summary of get
     *
     * API method: SYNO.NoteStation.Setting get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDSM
     *
     * API method: SYNO.NoteStation.Setting.DSM get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Setting.DSM-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDSM()
    {
        $api = 'DSM';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getGlobal
     *
     * API method: SYNO.NoteStation.Setting.Global get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Setting.Global-get.json
     * @return array|bool|string|\stdClass
     */
    public function getGlobal()
    {
        $api = 'Global';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
