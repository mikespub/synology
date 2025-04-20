<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class Package - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.Package
 * ```
 * $result = $syno->webstation()->package()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Package
 * @package Synology\Services\WebStation
 */
class Package extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.Package';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.WebStation.Package list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Package-list.json
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
