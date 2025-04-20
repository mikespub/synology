<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class ErrorPage - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.ErrorPage
 * ```
 * $result = $syno->webstation()->errorpage()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.ErrorPage
 * @package Synology\Services\WebStation
 */
class ErrorPage extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.ErrorPage';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.WebStation.ErrorPage list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.ErrorPage-list.json
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
