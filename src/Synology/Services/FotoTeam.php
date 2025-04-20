<?php

namespace Synology\Services;

/**
 * Class FotoTeam - created automatically by ServiceGenerator
 *
 * API: SYNO.FotoTeam
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam
 * @package Synology\Services
 */
class FotoTeam extends BaseService
{
    public const API_SERVICE_NAME = 'FotoTeam';
    public const API_VERSION = 2;

    /**
     * Summary of listBrowseFolder
     *
     * API method: SYNO.FotoTeam.Browse.Folder list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Folder-list.json
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
     * API method: SYNO.FotoTeam.Browse.GeneralTag list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.GeneralTag-list.json
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
     * API method: SYNO.FotoTeam.Browse.Geocoding list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Geocoding-list.json
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
     * API method: SYNO.FotoTeam.Browse.Item list (6)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Item-list.json
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
     * Summary of listBrowsePerson
     *
     * API method: SYNO.FotoTeam.Browse.Person list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Person-list.json
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
     * API method: SYNO.FotoTeam.Browse.RecentlyAdded list (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.RecentlyAdded-list.json
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
     * API method: SYNO.FotoTeam.Browse.Timeline get (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Timeline-get.json
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
     * Summary of getIndex
     *
     * API method: SYNO.FotoTeam.Index get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Index-get.json
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
     * Summary of listSearchFilter
     *
     * API method: SYNO.FotoTeam.Search.Filter list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Search.Filter-list.json
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
}
