<?php

namespace Synology\Services;

/**
 * Class SecurityAdvisor - created automatically by ServiceGenerator
 *
 * API: SYNO.SecurityAdvisor
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecurityAdvisor
 * @package Synology\Services
 */
class SecurityAdvisor extends BaseService
{
    public const API_SERVICE_NAME = 'SecurityAdvisor';
    public const API_VERSION = 1;

    /**
     * Summary of getConf
     *
     * API method: SYNO.SecurityAdvisor.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecurityAdvisor.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getConf()
    {
        $api = 'Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLoginActivity
     *
     * API method: SYNO.SecurityAdvisor.LoginActivity list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecurityAdvisor.LoginActivity-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLoginActivity()
    {
        $api = 'LoginActivity';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getLoginActivityUser
     *
     * API method: SYNO.SecurityAdvisor.LoginActivity.User get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecurityAdvisor.LoginActivity.User-get.json
     * @return array|bool|string|\stdClass
     */
    public function getLoginActivityUser()
    {
        $api = 'LoginActivity.User';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
