<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class HTTP - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.HTTP
 * ```
 * $result = $syno->webstation()->http()->listVHost();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.HTTP
 * @package Synology\Services\WebStation
 */
class HTTP extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.HTTP';
    public const API_VERSION = 1;

    /**
     * Summary of listVHost
     *
     * API method: SYNO.WebStation.HTTP.VHost list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.HTTP.VHost-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVHost()
    {
        $api = 'VHost';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
