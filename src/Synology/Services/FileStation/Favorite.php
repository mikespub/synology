<?php

namespace Synology\Services\FileStation;

use Synology\Services\BaseService;

/**
 * Class Favorite - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation.Favorite
 * ```
 * $result = $syno->filestation()->favorite()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Favorite
 * @package Synology\Services\FileStation
 */
class Favorite extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation.Favorite';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.FileStation.Favorite list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Favorite-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
