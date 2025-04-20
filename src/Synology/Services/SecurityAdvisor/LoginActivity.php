<?php

namespace Synology\Services\SecurityAdvisor;

use Synology\Services\BaseService;

/**
 * Class LoginActivity - created automatically by ServiceGenerator
 *
 * API: SYNO.SecurityAdvisor.LoginActivity
 * ```
 * $result = $syno->securityadvisor()->loginactivity()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecurityAdvisor#/SecurityAdvisor.LoginActivity
 * @package Synology\Services\SecurityAdvisor
 */
class LoginActivity extends BaseService
{
    public const API_SERVICE_NAME = 'SecurityAdvisor.LoginActivity';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SecurityAdvisor.LoginActivity list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecurityAdvisor.LoginActivity-list.json
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

    /**
     * Summary of getUser
     *
     * API method: SYNO.SecurityAdvisor.LoginActivity.User get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecurityAdvisor.LoginActivity.User-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getUser()
    {
        $api = 'User';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
