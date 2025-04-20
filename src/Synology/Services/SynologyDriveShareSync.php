<?php

namespace Synology\Services;

/**
 * Class SynologyDriveShareSync - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDriveShareSync
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDriveShareSync
 * @package Synology\Services
 */
class SynologyDriveShareSync extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDriveShareSync';
    public const API_VERSION = 1;

    /**
     * Summary of getConfig
     *
     * API method: SYNO.SynologyDriveShareSync.Config get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDriveShareSync.Config-get.json
     * @return array|bool|string|\stdClass
     */
    public function getConfig()
    {
        $api = 'Config';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listConnection
     *
     * API method: SYNO.SynologyDriveShareSync.Connection list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDriveShareSync.Connection-list.json
     * @return array|bool|string|\stdClass
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
}
