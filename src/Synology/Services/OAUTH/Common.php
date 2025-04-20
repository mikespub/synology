<?php

namespace Synology\Services\OAUTH;

use Synology\Services\BaseService;

/**
 * Class Common - created automatically by ServiceGenerator
 *
 * API: SYNO.OAUTH.Common
 * ```
 * $result = $syno->oauth()->common()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Common
 * @package Synology\Services\OAUTH
 */
class Common extends BaseService
{
    public const API_SERVICE_NAME = 'OAUTH.Common';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.OAUTH.Common get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.OAUTH.Common-get.json
     * @return array<mixed>|bool|string|\stdClass
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
