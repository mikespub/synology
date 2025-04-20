<?php

namespace Synology\Services\FileStation;

use Synology\Services\BaseService;

/**
 * Class ListSvc - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation.List
 * ```
 * $result = $syno->filestation()->list()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.List
 * @package Synology\Services\FileStation
 */
class ListSvc extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation.List';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.FileStation.List list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.List-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list(string $folder_path = "/home", array $additional = ["real_path","size","owner","time","perm"])
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
            'folder_path' => json_encode($folder_path, JSON_UNESCAPED_SLASHES),
            'additional' => json_encode($additional, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listShare
     *
     * API method: SYNO.FileStation.List list_share (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.List-list_share.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listShare(array $additional = ["real_path","owner","time","perm","volume_status"])
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list_share';
        $version = 2;
        $params = [
            'additional' => json_encode($additional, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getinfo
     *
     * API method: SYNO.FileStation.List getinfo (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.List-getinfo.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getinfo(string $inPath = "/home", array $additional = ["real_path","size","owner","time","perm"])
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'getinfo';
        $version = 2;
        $params = [
            'path' => json_encode($inPath, JSON_UNESCAPED_SLASHES),
            'additional' => json_encode($additional, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
