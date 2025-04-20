<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class DefaultSvc - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.Default
 * ```
 * $result = $syno->webstation()->default()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Default
 * @package Synology\Services\WebStation
 */
class DefaultSvc extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.Default';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.WebStation.Default get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Default-get.json
     * @return array|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
