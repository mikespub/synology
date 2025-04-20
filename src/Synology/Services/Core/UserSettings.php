<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class UserSettings - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.UserSettings
 * ```
 * $result = $syno->core()->usersettings()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.UserSettings
 * @package Synology\Services\Core
 */
class UserSettings extends BaseService
{
    public const API_SERVICE_NAME = 'Core.UserSettings';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.UserSettings get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.UserSettings-get.json
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
