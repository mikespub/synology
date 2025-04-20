<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class WebService - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.WebService
 * ```
 * $result = $syno->webstation()->webservice()->listPortal();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.WebService
 * @package Synology\Services\WebStation
 */
class WebService extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.WebService';
    public const API_VERSION = 1;

    /**
     * Summary of listPortal
     *
     * API method: SYNO.WebStation.WebService.Portal list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.WebService.Portal-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listPortal()
    {
        $api = 'Portal';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listService
     *
     * API method: SYNO.WebStation.WebService.Service list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.WebService.Service-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listService()
    {
        $api = 'Service';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
