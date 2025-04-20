<?php

namespace Synology\Services;

/**
 * Class Auth - created automatically by ServiceGenerator
 *
 * API: SYNO.Auth
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Auth
 * @package Synology\Services
 */
class Auth extends BaseService
{
    public const API_SERVICE_NAME = 'Auth';
    public const API_VERSION = 1;

    /**
     * Summary of getRescueEmail
     *
     * API method: SYNO.Auth.RescueEmail get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Auth.RescueEmail-get.json
     * @return array|bool|string|\stdClass
     */
    public function getRescueEmail()
    {
        $api = 'RescueEmail';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
