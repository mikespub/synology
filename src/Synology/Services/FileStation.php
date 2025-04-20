<?php

namespace Synology\Services;

/**
 * Class FileStation - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation
 * @package Synology\Services
 */
class FileStation extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation';
    public const API_VERSION = 3;

    /**
     * Summary of listBackgroundTask
     *
     * API method: SYNO.FileStation.BackgroundTask list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.BackgroundTask-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBackgroundTask()
    {
        $api = 'BackgroundTask';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFavorite
     *
     * API method: SYNO.FileStation.Favorite list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Favorite-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFavorite()
    {
        $api = 'Favorite';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfo
     *
     * API method: SYNO.FileStation.Info get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listList
     *
     * API method: SYNO.FileStation.List list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.List-list.json
     * @return array|bool|string|\stdClass
     */
    public function listList(string $folder_path = "/home", array $additional = ["real_path","size","owner","time","perm"])
    {
        $api = 'List';
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
     * Summary of listShareList
     *
     * API method: SYNO.FileStation.List list_share (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.List-list_share.json
     * @return array|bool|string|\stdClass
     */
    public function listShareList(array $additional = ["real_path","owner","time","perm","volume_status"])
    {
        $api = 'List';
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
     * Summary of getinfoList
     *
     * API method: SYNO.FileStation.List getinfo (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.List-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoList(string $inPath = "/home", array $additional = ["real_path","size","owner","time","perm"])
    {
        $api = 'List';
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

    /**
     * Summary of getMountList
     *
     * API method: SYNO.FileStation.Mount.List get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Mount.List-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMountList()
    {
        $api = 'Mount.List';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSearchHistory
     *
     * API method: SYNO.FileStation.Search.History get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Search.History-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSearchHistory()
    {
        $api = 'Search.History';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettings
     *
     * API method: SYNO.FileStation.Settings get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Settings-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettings()
    {
        $api = 'Settings';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSharing
     *
     * API method: SYNO.FileStation.Sharing list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Sharing-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSharing()
    {
        $api = 'Sharing';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVFSConnection
     *
     * API method: SYNO.FileStation.VFS.Connection list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.VFS.Connection-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVFSConnection()
    {
        $api = 'VFS.Connection';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVFSProfile
     *
     * API method: SYNO.FileStation.VFS.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.VFS.Profile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVFSProfile()
    {
        $api = 'VFS.Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVFSProtocol
     *
     * API method: SYNO.FileStation.VFS.Protocol list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.VFS.Protocol-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVFSProtocol()
    {
        $api = 'VFS.Protocol';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVirtualFolder
     *
     * API method: SYNO.FileStation.VirtualFolder list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.VirtualFolder-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVirtualFolder()
    {
        $api = 'VirtualFolder';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
