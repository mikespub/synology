<?php

namespace Synology\Services;

/**
 * Class Foto - created automatically by ServiceGenerator
 *
 * API: SYNO.Foto
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto
 * @package Synology\Services
 */
class Foto extends BaseService
{
    public const API_SERVICE_NAME = 'Foto';
    public const API_VERSION = 5;

    /**
     * Summary of listBrowseAlbum
     *
     * API method: SYNO.Foto.Browse.Album list (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Album-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseAlbum(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.Album';
        $path = static::API_PATH;
        $method = 'list';
        $version = 5;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getBrowseCategory
     *
     * API method: SYNO.Foto.Browse.Category get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Category-get.json
     * @return array|bool|string|\stdClass
     */
    public function getBrowseCategory()
    {
        $api = 'Browse.Category';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowseConditionAlbum
     *
     * API method: SYNO.Foto.Browse.ConditionAlbum list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.ConditionAlbum-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseConditionAlbum(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.ConditionAlbum';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowseFolder
     *
     * API method: SYNO.Foto.Browse.Folder list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Folder-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseFolder(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.Folder';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowseGeneralTag
     *
     * API method: SYNO.Foto.Browse.GeneralTag list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.GeneralTag-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseGeneralTag(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.GeneralTag';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowseGeocoding
     *
     * API method: SYNO.Foto.Browse.Geocoding list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Geocoding-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseGeocoding(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.Geocoding';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowseItem
     *
     * API method: SYNO.Foto.Browse.Item list (6)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Item-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseItem(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.Item';
        $path = static::API_PATH;
        $method = 'list';
        $version = 6;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowseNormalAlbum
     *
     * API method: SYNO.Foto.Browse.NormalAlbum list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.NormalAlbum-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseNormalAlbum(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.NormalAlbum';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowsePerson
     *
     * API method: SYNO.Foto.Browse.Person list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Person-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowsePerson(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.Person';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBrowseRecentlyAdded
     *
     * API method: SYNO.Foto.Browse.RecentlyAdded list (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.RecentlyAdded-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBrowseRecentlyAdded(int $offset = 0, int $limit = 10)
    {
        $api = 'Browse.RecentlyAdded';
        $path = static::API_PATH;
        $method = 'list';
        $version = 5;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getBrowseTimeline
     *
     * API method: SYNO.Foto.Browse.Timeline get (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Timeline-get.json
     * @return array|bool|string|\stdClass
     */
    public function getBrowseTimeline()
    {
        $api = 'Browse.Timeline';
        $path = static::API_PATH;
        $method = 'get';
        $version = 5;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFavorite
     *
     * API method: SYNO.Foto.Favorite list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Favorite-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFavorite(int $offset = 0, int $limit = 10)
    {
        $api = 'Favorite';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getIndex
     *
     * API method: SYNO.Foto.Index get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Index-get.json
     * @return array|bool|string|\stdClass
     */
    public function getIndex()
    {
        $api = 'Index';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPhotoRequest
     *
     * API method: SYNO.Foto.PhotoRequest list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.PhotoRequest-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPhotoRequest(int $offset = 0, int $limit = 10)
    {
        $api = 'PhotoRequest';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSearchFilter
     *
     * API method: SYNO.Foto.Search.Filter list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Search.Filter-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSearchFilter()
    {
        $api = 'Search.Filter';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingAdmin
     *
     * API method: SYNO.Foto.Setting.Admin get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.Admin-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingAdmin()
    {
        $api = 'Setting.Admin';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingGuest
     *
     * API method: SYNO.Foto.Setting.Guest get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.Guest-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingGuest()
    {
        $api = 'Setting.Guest';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingMobileCompatibility
     *
     * API method: SYNO.Foto.Setting.MobileCompatibility get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.MobileCompatibility-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingMobileCompatibility()
    {
        $api = 'Setting.MobileCompatibility';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingTeamSpace
     *
     * API method: SYNO.Foto.Setting.TeamSpace get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.TeamSpace-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingTeamSpace()
    {
        $api = 'Setting.TeamSpace';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingUser
     *
     * API method: SYNO.Foto.Setting.User get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.User-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingUser()
    {
        $api = 'Setting.User';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingWizard
     *
     * API method: SYNO.Foto.Setting.Wizard get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.Wizard-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingWizard()
    {
        $api = 'Setting.Wizard';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
