<?php

namespace Synology\Services;

/**
 * Class S2S - created automatically by ServiceGenerator
 *
 * API: SYNO.S2S
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=S2S
 * @package Synology\Services
 */
class S2S extends BaseService
{
    public const API_SERVICE_NAME = 'S2S';
    public const API_VERSION = 1;

    /**
     * Summary of getServer
     *
     * API method: SYNO.S2S.Server get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.S2S.Server-get.json
     * @return array|bool|string|\stdClass
     */
    public function getServer()
    {
        $api = 'Server';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listServerPair
     *
     * API method: SYNO.S2S.Server.Pair list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.S2S.Server.Pair-list.json
     * @return array|bool|string|\stdClass
     */
    public function listServerPair()
    {
        $api = 'Server.Pair';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listClientJob
     *
     * API method: SYNO.S2S.Client.Job list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.S2S.Client.Job-list.json
     * @return array|bool|string|\stdClass
     */
    public function listClientJob()
    {
        $api = 'Client.Job';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
