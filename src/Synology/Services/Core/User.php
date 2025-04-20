<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class User - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.User
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.User
 * @package Synology\Services\Core
 */
class User extends BaseService
{
    public const API_SERVICE_NAME = 'Core.User';
    public const API_VERSION = 1;

    /**
     * Summary of getHome
     *
     * API method: SYNO.Core.User.Home get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.User.Home-get.json
     * @return array|bool|string|\stdClass
     */
    public function getHome()
    {
        $api = 'Home';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPasswordExpiry
     *
     * API method: SYNO.Core.User.PasswordExpiry get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.User.PasswordExpiry-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPasswordExpiry()
    {
        $api = 'PasswordExpiry';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPasswordPolicy
     *
     * API method: SYNO.Core.User.PasswordPolicy get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.User.PasswordPolicy-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPasswordPolicy()
    {
        $api = 'PasswordPolicy';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listUsernamePolicy
     *
     * API method: SYNO.Core.User.UsernamePolicy list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.User.UsernamePolicy-list.json
     * @return array|bool|string|\stdClass
     */
    public function listUsernamePolicy()
    {
        $api = 'UsernamePolicy';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
