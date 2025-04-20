<?php

namespace Synology\Services\FotoTeam;

use Synology\Services\BaseService;

/**
 * Class Browse - created automatically by ServiceGenerator
 *
 * API: SYNO.FotoTeam.Browse
 * ```
 * $result = $syno->fototeam()->browse()->listFolder();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam#/FotoTeam.Browse
 * @package Synology\Services\FotoTeam
 */
class Browse extends BaseService
{
    public const API_SERVICE_NAME = 'FotoTeam.Browse';
    public const API_VERSION = 2;

    /**
     * Summary of listFolder
     *
     * API method: SYNO.FotoTeam.Browse.Folder list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Folder-list.json
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
     * API method: SYNO.FotoTeam.Browse.GeneralTag list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.GeneralTag-list.json
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
     * API method: SYNO.FotoTeam.Browse.Geocoding list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Geocoding-list.json
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
     * API method: SYNO.FotoTeam.Browse.Item list (6)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Item-list.json
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
     * Summary of listPerson
     *
     * API method: SYNO.FotoTeam.Browse.Person list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Person-list.json
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
     * API method: SYNO.FotoTeam.Browse.RecentlyAdded list (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.RecentlyAdded-list.json
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
     * API method: SYNO.FotoTeam.Browse.Timeline get (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Browse.Timeline-get.json
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
