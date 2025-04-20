<?php

namespace Synology\Services\FileStation;

use Synology\Services\BaseService;

/**
 * Class Mount - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation.Mount
 * ```
 * $result = $syno->filestation()->mount()->getList();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.Mount
 * @package Synology\Services\FileStation
 */
class Mount extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation.Mount';
    public const API_VERSION = 3;

    /**
     * Summary of getList
     *
     * API method: SYNO.FileStation.Mount.List get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.Mount.List-get.json
     * @return array|bool|string|\stdClass
     */
    public function getList()
    {
        $api = 'List';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
