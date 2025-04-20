<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Theme - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Theme
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Theme
 * @package Synology\Services\Core
 */
class Theme extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Theme';
    public const API_VERSION = 1;

    /**
     * Summary of getDesktop
     *
     * API method: SYNO.Core.Theme.Desktop get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Theme.Desktop-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDesktop()
    {
        $api = 'Desktop';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFileSharingLogin
     *
     * API method: SYNO.Core.Theme.FileSharingLogin get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Theme.FileSharingLogin-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFileSharingLogin()
    {
        $api = 'FileSharingLogin';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getLogin
     *
     * API method: SYNO.Core.Theme.Login get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Theme.Login-get.json
     * @return array|bool|string|\stdClass
     */
    public function getLogin()
    {
        $api = 'Login';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
