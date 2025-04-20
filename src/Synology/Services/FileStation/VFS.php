<?php

namespace Synology\Services\FileStation;

use Synology\Services\BaseService;

/**
 * Class VFS - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation.VFS
 * ```
 * $result = $syno->filestation()->vfs()->listConnection();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.VFS
 * @package Synology\Services\FileStation
 */
class VFS extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation.VFS';
    public const API_VERSION = 3;

    /**
     * Summary of listConnection
     *
     * API method: SYNO.FileStation.VFS.Connection list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.VFS.Connection-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listConnection()
    {
        $api = 'Connection';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProfile
     *
     * API method: SYNO.FileStation.VFS.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.VFS.Profile-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listProfile()
    {
        $api = 'Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProtocol
     *
     * API method: SYNO.FileStation.VFS.Protocol list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.VFS.Protocol-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listProtocol()
    {
        $api = 'Protocol';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
