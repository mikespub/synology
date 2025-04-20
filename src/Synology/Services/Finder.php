<?php

namespace Synology\Services;

/**
 * Class Finder - created automatically by ServiceGenerator
 *
 * API: SYNO.Finder
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder
 * @package Synology\Services
 */
class Finder extends BaseService
{
    public const API_SERVICE_NAME = 'Finder';
    public const API_VERSION = 1;

    /**
     * Summary of getBookmark
     *
     * API method: SYNO.Finder.Bookmark get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.Bookmark-get.json
     * @return array|bool|string|\stdClass
     */
    public function getBookmark()
    {
        $api = 'Bookmark';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getElasticSearchHistory
     *
     * API method: SYNO.Finder.Elastic.SearchHistory get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.Elastic.SearchHistory-get.json
     * @return array|bool|string|\stdClass
     */
    public function getElasticSearchHistory()
    {
        $api = 'Elastic.SearchHistory';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFileIndexingFolder
     *
     * API method: SYNO.Finder.FileIndexing.Folder list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.FileIndexing.Folder-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFileIndexingFolder()
    {
        $api = 'FileIndexing.Folder';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFileIndexingStatus
     *
     * API method: SYNO.Finder.FileIndexing.Status get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.FileIndexing.Status-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFileIndexingStatus()
    {
        $api = 'FileIndexing.Status';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPreference
     *
     * API method: SYNO.Finder.Preference get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.Preference-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPreference()
    {
        $api = 'Preference';
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
     * API method: SYNO.Finder.Settings get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.Settings-get.json
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
}
