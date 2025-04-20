<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class MediaIndexing - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.MediaIndexing
 * ```
 * $result = $syno->core()->mediaindexing()->getIndexFolder();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.MediaIndexing
 * @package Synology\Services\Core
 */
class MediaIndexing extends BaseService
{
    public const API_SERVICE_NAME = 'Core.MediaIndexing';
    public const API_VERSION = 1;

    /**
     * Summary of getIndexFolder
     *
     * API method: SYNO.Core.MediaIndexing.IndexFolder get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.MediaIndexing.IndexFolder-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getIndexFolder()
    {
        $api = 'IndexFolder';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getScheduler
     *
     * API method: SYNO.Core.MediaIndexing.Scheduler get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.MediaIndexing.Scheduler-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getScheduler()
    {
        $api = 'Scheduler';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getThumbnailQuality
     *
     * API method: SYNO.Core.MediaIndexing.ThumbnailQuality get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.MediaIndexing.ThumbnailQuality-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getThumbnailQuality()
    {
        $api = 'ThumbnailQuality';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
