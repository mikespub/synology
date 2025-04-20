<?php

namespace Synology\Services\OAUTH;

use Synology\Services\BaseService;

/**
 * Class Client - created automatically by ServiceGenerator
 *
 * API: SYNO.OAUTH.Client
 * ```
 * $result = $syno->oauth()->client()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Client
 * @package Synology\Services\OAUTH
 */
class Client extends BaseService
{
    public const API_SERVICE_NAME = 'OAUTH.Client';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.OAUTH.Client list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Client-list.json
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
