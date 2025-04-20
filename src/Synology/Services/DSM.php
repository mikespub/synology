<?php

namespace Synology\Services;

/**
 * Class DSM - created automatically by ServiceGenerator
 *
 * API: SYNO.DSM
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DSM
 * @package Synology\Services
 */
class DSM extends BaseService
{
    public const API_SERVICE_NAME = 'DSM';
    public const API_VERSION = 2;

    /**
     * Summary of getinfoInfo
     *
     * API method: SYNO.DSM.Info getinfo (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DSM.Info-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'getinfo';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNetwork
     *
     * API method: SYNO.DSM.Network list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DSM.Network-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNetwork()
    {
        $api = 'Network';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
