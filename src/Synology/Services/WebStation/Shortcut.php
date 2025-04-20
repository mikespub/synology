<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class Shortcut - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.Shortcut
 * ```
 * $result = $syno->webstation()->shortcut()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Shortcut
 * @package Synology\Services\WebStation
 */
class Shortcut extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.Shortcut';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.WebStation.Shortcut list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Shortcut-list.json
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
