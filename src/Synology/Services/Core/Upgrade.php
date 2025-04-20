<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Upgrade - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Upgrade
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Upgrade
 * @package Synology\Services\Core
 */
class Upgrade extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Upgrade';
    public const API_VERSION = 1;

    /**
     * Summary of getGroupSetting
     *
     * API method: SYNO.Core.Upgrade.Group.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Upgrade.Group.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getGroupSetting()
    {
        $api = 'Group.Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSetting
     *
     * API method: SYNO.Core.Upgrade.Setting get (4)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Upgrade.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSetting()
    {
        $api = 'Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 4;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
