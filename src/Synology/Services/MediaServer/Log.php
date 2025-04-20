<?php

namespace Synology\Services\MediaServer;

use Synology\Services\BaseService;

/**
 * Class Log - created automatically by ServiceGenerator
 *
 * API: SYNO.MediaServer.Log
 * ```
 * $result = $syno->mediaserver()->log()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=MediaServer#/MediaServer.Log
 * @package Synology\Services\MediaServer
 */
class Log extends BaseService
{
    public const API_SERVICE_NAME = 'MediaServer.Log';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.MediaServer.Log get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.MediaServer.Log-get.json
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
}
