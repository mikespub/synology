<?php

namespace Synology\Services\Foto;

use Synology\Services\BaseService;

/**
 * Class Browse - created automatically by ServiceGenerator
 *
 * API: SYNO.Foto.Browse
 * ```
 * $result = $syno->foto()->browse()->listAlbum();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Browse
 * @package Synology\Services\Foto
 */
class Browse extends BaseService
{
    public const API_SERVICE_NAME = 'Foto.Browse';
    public const API_VERSION = 5;

    /**
     * Summary of listAlbum
     *
     * API method: SYNO.Foto.Browse.Album list (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Album-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAlbum(int $offset = 0, int $limit = 10)
    {
        $api = 'Album';
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
     * Summary of getCategory
     *
     * API method: SYNO.Foto.Browse.Category get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Category-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCategory()
    {
        $api = 'Category';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listConditionAlbum
     *
     * API method: SYNO.Foto.Browse.ConditionAlbum list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.ConditionAlbum-list.json
     * @return array|bool|string|\stdClass
     */
    public function listConditionAlbum(int $offset = 0, int $limit = 10)
    {
        $api = 'ConditionAlbum';
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
     * Summary of listFolder
     *
     * API method: SYNO.Foto.Browse.Folder list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Folder-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFolder(int $offset = 0, int $limit = 10)
    {
        $api = 'Folder';
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
     * Summary of listGeneralTag
     *
     * API method: SYNO.Foto.Browse.GeneralTag list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.GeneralTag-list.json
     * @return array|bool|string|\stdClass
     */
    public function listGeneralTag(int $offset = 0, int $limit = 10)
    {
        $api = 'GeneralTag';
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
     * Summary of listGeocoding
     *
     * API method: SYNO.Foto.Browse.Geocoding list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Geocoding-list.json
     * @return array|bool|string|\stdClass
     */
    public function listGeocoding(int $offset = 0, int $limit = 10)
    {
        $api = 'Geocoding';
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
     * Summary of listItem
     *
     * API method: SYNO.Foto.Browse.Item list (6)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Item-list.json
     * @return array|bool|string|\stdClass
     */
    public function listItem(int $offset = 0, int $limit = 10)
    {
        $api = 'Item';
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
     * Summary of listNormalAlbum
     *
     * API method: SYNO.Foto.Browse.NormalAlbum list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.NormalAlbum-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNormalAlbum(int $offset = 0, int $limit = 10)
    {
        $api = 'NormalAlbum';
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
     * Summary of listPerson
     *
     * API method: SYNO.Foto.Browse.Person list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Person-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPerson(int $offset = 0, int $limit = 10)
    {
        $api = 'Person';
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
     * Summary of listRecentlyAdded
     *
     * API method: SYNO.Foto.Browse.RecentlyAdded list (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.RecentlyAdded-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRecentlyAdded(int $offset = 0, int $limit = 10)
    {
        $api = 'RecentlyAdded';
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
     * Summary of getTimeline
     *
     * API method: SYNO.Foto.Browse.Timeline get (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Browse.Timeline-get.json
     * @return array|bool|string|\stdClass
     */
    public function getTimeline()
    {
        $api = 'Timeline';
        $path = static::API_PATH;
        $method = 'get';
        $version = 5;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
