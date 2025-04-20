<?php

namespace Synology\Services\OAUTH;

use Synology\Services\BaseService;

/**
 * Class Token - created automatically by ServiceGenerator
 *
 * API: SYNO.OAUTH.Token
 * ```
 * $result = $syno->oauth()->token()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Token
 * @package Synology\Services\OAUTH
 */
class Token extends BaseService
{
    public const API_SERVICE_NAME = 'OAUTH.Token';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.OAUTH.Token list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Token-list.json
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
