<?php

namespace Synology\Services;

/**
 * Class MediaServer - created automatically by ServiceGenerator
 *
 * API: SYNO.MediaServer
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=MediaServer
 * @package Synology\Services
 */
class MediaServer extends BaseService
{
    public const API_SERVICE_NAME = 'MediaServer';
    public const API_VERSION = 1;

    /**
     * Summary of getLog
     *
     * API method: SYNO.MediaServer.Log get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.MediaServer.Log-get.json
     * @return array|bool|string|\stdClass
     */
    public function getLog()
    {
        $api = 'Log';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVideoCollection
     *
     * API method: SYNO.MediaServer.VideoCollection get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.MediaServer.VideoCollection-get.json
     * @return array|bool|string|\stdClass
     */
    public function getVideoCollection()
    {
        $api = 'VideoCollection';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
