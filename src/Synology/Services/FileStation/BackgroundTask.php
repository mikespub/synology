<?php

namespace Synology\Services\FileStation;

use Synology\Services\BaseService;

/**
 * Class BackgroundTask - created automatically by ServiceGenerator
 *
 * API: SYNO.FileStation.BackgroundTask
 * ```
 * $result = $syno->filestation()->backgroundtask()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation#/FileStation.BackgroundTask
 * @package Synology\Services\FileStation
 */
class BackgroundTask extends BaseService
{
    public const API_SERVICE_NAME = 'FileStation.BackgroundTask';
    public const API_VERSION = 3;

    /**
     * Summary of list
     *
     * API method: SYNO.FileStation.BackgroundTask list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FileStation.BackgroundTask-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
