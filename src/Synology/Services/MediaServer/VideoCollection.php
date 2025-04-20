<?php

namespace Synology\Services\MediaServer;

use Synology\Services\BaseService;

/**
 * Class VideoCollection - created automatically by ServiceGenerator
 *
 * API: SYNO.MediaServer.VideoCollection
 * ```
 * $result = $syno->mediaserver()->videocollection()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=MediaServer#/MediaServer.VideoCollection
 * @package Synology\Services\MediaServer
 */
class VideoCollection extends BaseService
{
    public const API_SERVICE_NAME = 'MediaServer.VideoCollection';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.MediaServer.VideoCollection get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.MediaServer.VideoCollection-get.json
     * @return array|bool|string|\stdClass
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
