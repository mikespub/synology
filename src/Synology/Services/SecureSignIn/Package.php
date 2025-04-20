<?php

namespace Synology\Services\SecureSignIn;

use Synology\Services\BaseService;

/**
 * Class Package - created automatically by ServiceGenerator
 *
 * API: SYNO.SecureSignIn.Package
 * ```
 * $result = $syno->securesignin()->package()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Package
 * @package Synology\Services\SecureSignIn
 */
class Package extends BaseService
{
    public const API_SERVICE_NAME = 'SecureSignIn.Package';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SecureSignIn.Package get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Package-get.json
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
