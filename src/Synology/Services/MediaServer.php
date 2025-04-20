<?php

namespace Synology\Services;

/**
 * Class MediaServer - created automatically by ServiceGenerator
 *
 * API: SYNO.MediaServer
 * ```
 * $result = $syno->mediaserver()->log()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=MediaServer
 * @package Synology\Services
 */
class MediaServer extends BaseService
{
    public const API_SERVICE_NAME = 'MediaServer';
    public const API_VERSION = 1;
    protected ?MediaServer\Log $logSvc = null;
    protected ?MediaServer\VideoCollection $videocollectionSvc = null;

    /**
     * Summary of log
     *
     * API: SYNO.MediaServer.Log
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=MediaServer#/MediaServer.Log
     * @return MediaServer\Log
     */
    public function log()
    {
        $this->logSvc ??= new MediaServer\Log($this->client);
        return $this->logSvc;
    }

    /**
     * Summary of videocollection
     *
     * API: SYNO.MediaServer.VideoCollection
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=MediaServer#/MediaServer.VideoCollection
     * @return MediaServer\VideoCollection
     */
    public function videocollection()
    {
        $this->videocollectionSvc ??= new MediaServer\VideoCollection($this->client);
        return $this->videocollectionSvc;
    }
}
