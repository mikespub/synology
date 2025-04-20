<?php

namespace Synology\Services;

/**
 * Class FileStation - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation
 * ```
 * $result = $syno->filestation()->getInfo();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation
 * @package Synology\Services
 */
class FileStation extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation';
    public const API_VERSION = 3;
    protected ?FileStation\BackgroundTask $backgroundtaskSvc = null;
    protected ?FileStation\Favorite $favoriteSvc = null;
    protected ?FileStation\ListSvc $listSvc = null;
    protected ?FileStation\Mount $mountSvc = null;
    protected ?FileStation\Search $searchSvc = null;
    protected ?FileStation\Settings $settingsSvc = null;
    protected ?FileStation\Sharing $sharingSvc = null;
    protected ?FileStation\VFS $vfsSvc = null;

    /**
     * Summary of backgroundtask
     *
     * API: SYNO.FileStation.BackgroundTask
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.BackgroundTask
     * @return FileStation\BackgroundTask
     */
    public function backgroundtask()
    {
        $this->backgroundtaskSvc ??= new FileStation\BackgroundTask($this->client);
        return $this->backgroundtaskSvc;
    }

    /**
     * Summary of favorite
     *
     * API: SYNO.FileStation.Favorite
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Favorite
     * @return FileStation\Favorite
     */
    public function favorite()
    {
        $this->favoriteSvc ??= new FileStation\Favorite($this->client);
        return $this->favoriteSvc;
    }

    /**
     * Summary of list
     *
     * API: SYNO.FileStation.List
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.List
     * @return FileStation\ListSvc
     */
    public function list()
    {
        $this->listSvc ??= new FileStation\ListSvc($this->client);
        return $this->listSvc;
    }

    /**
     * Summary of mount
     *
     * API: SYNO.FileStation.Mount
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Mount
     * @return FileStation\Mount
     */
    public function mount()
    {
        $this->mountSvc ??= new FileStation\Mount($this->client);
        return $this->mountSvc;
    }

    /**
     * Summary of search
     *
     * API: SYNO.FileStation.Search
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Search
     * @return FileStation\Search
     */
    public function search()
    {
        $this->searchSvc ??= new FileStation\Search($this->client);
        return $this->searchSvc;
    }

    /**
     * Summary of settings
     *
     * API: SYNO.FileStation.Settings
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Settings
     * @return FileStation\Settings
     */
    public function settings()
    {
        $this->settingsSvc ??= new FileStation\Settings($this->client);
        return $this->settingsSvc;
    }

    /**
     * Summary of sharing
     *
     * API: SYNO.FileStation.Sharing
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Sharing
     * @return FileStation\Sharing
     */
    public function sharing()
    {
        $this->sharingSvc ??= new FileStation\Sharing($this->client);
        return $this->sharingSvc;
    }

    /**
     * Summary of vfs
     *
     * API: SYNO.FileStation.VFS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.VFS
     * @return FileStation\VFS
     */
    public function vfs()
    {
        $this->vfsSvc ??= new FileStation\VFS($this->client);
        return $this->vfsSvc;
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
