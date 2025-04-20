<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class Task - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.Task
 * ```
 * $result = $syno->webstation()->task()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Task
 * @package Synology\Services\WebStation
 */
class Task extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.Task';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.WebStation.Task list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Task-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
