<?php

namespace Synology\Services\OAUTH;

use Synology\Services\BaseService;

/**
 * Class Log - created automatically by ServiceGenerator
 *
 * API: SYNO.OAUTH.Log
 * ```
 * $result = $syno->oauth()->log()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Log
 * @package Synology\Services\OAUTH
 */
class Log extends BaseService
{
    public const API_SERVICE_NAME = 'OAUTH.Log';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.OAUTH.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Log-list.json
     * @return array<mixed>|bool|string|\stdClass
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
