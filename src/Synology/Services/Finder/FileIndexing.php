<?php

namespace Synology\Services\Finder;

use Synology\Services\BaseService;

/**
 * Class FileIndexing - created automatically by ServiceGenerator
 *
 * API: SYNO.Finder.FileIndexing
 * ```
 * $result = $syno->finder()->fileindexing()->listFolder();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.FileIndexing
 * @package Synology\Services\Finder
 */
class FileIndexing extends BaseService
{
    public const API_SERVICE_NAME = 'Finder.FileIndexing';
    public const API_VERSION = 1;

    /**
     * Summary of listFolder
     *
     * API method: SYNO.Finder.FileIndexing.Folder list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.FileIndexing.Folder-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFolder()
    {
        $api = 'Folder';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getStatus
     *
     * API method: SYNO.Finder.FileIndexing.Status get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.FileIndexing.Status-get.json
     * @return array|bool|string|\stdClass
     */
    public function getStatus()
    {
        $api = 'Status';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
