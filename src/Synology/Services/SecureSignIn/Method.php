<?php

namespace Synology\Services\SecureSignIn;

use Synology\Services\BaseService;

/**
 * Class Method - created automatically by ServiceGenerator
 *
 * API: SYNO.SecureSignIn.Method
 * ```
 * $result = $syno->securesignin()->method()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Method
 * @package Synology\Services\SecureSignIn
 */
class Method extends BaseService
{
    public const API_SERVICE_NAME = 'SecureSignIn.Method';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SecureSignIn.Method get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Method-get.json
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
