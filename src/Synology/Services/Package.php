<?php

namespace Synology\Services;

/**
 * Class Package - created automatically by ServiceGenerator
 *
 * API: SYNO.Package
 * ```
 * $result = $syno->package()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Package
 * @package Synology\Services
 */
class Package extends BaseService
{
    public const API_SERVICE_NAME = 'Package';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Package list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Package-list.json
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
