<?php

namespace Synology\Services\S2S;

use Synology\Services\BaseService;

/**
 * Class Server - created automatically by ServiceGenerator
 *
 * API: SYNO.S2S.Server
 * ```
 * $result = $syno->s2s()->server()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=S2S#/S2S.Server
 * @package Synology\Services\S2S
 */
class Server extends BaseService
{
    public const API_SERVICE_NAME = 'S2S.Server';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.S2S.Server get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.S2S.Server-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPair
     *
     * API method: SYNO.S2S.Server.Pair list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.S2S.Server.Pair-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listPair()
    {
        $api = 'Pair';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
