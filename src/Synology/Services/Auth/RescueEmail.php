<?php

namespace Synology\Services\Auth;

use Synology\Services\BaseService;

/**
 * Class RescueEmail - created automatically by ServiceGenerator
 *
 * API: SYNO.Auth.RescueEmail
 * ```
 * $result = $syno->auth()->rescueemail()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Auth#/Auth.RescueEmail
 * @package Synology\Services\Auth
 */
class RescueEmail extends BaseService
{
    public const API_SERVICE_NAME = 'Auth.RescueEmail';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Auth.RescueEmail get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Auth.RescueEmail-get.json
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
