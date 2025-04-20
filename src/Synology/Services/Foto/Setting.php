<?php

namespace Synology\Services\Foto;

use Synology\Services\BaseService;

/**
 * Class Setting - created automatically by ServiceGenerator
 *
 * API: SYNO.Foto.Setting
 * ```
 * $result = $syno->foto()->setting()->getAdmin();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Setting
 * @package Synology\Services\Foto
 */
class Setting extends BaseService
{
    public const API_SERVICE_NAME = 'Foto.Setting';
    public const API_VERSION = 5;

    /**
     * Summary of getAdmin
     *
     * API method: SYNO.Foto.Setting.Admin get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.Admin-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getAdmin()
    {
        $api = 'Admin';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getGuest
     *
     * API method: SYNO.Foto.Setting.Guest get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.Guest-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getGuest()
    {
        $api = 'Guest';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMobileCompatibility
     *
     * API method: SYNO.Foto.Setting.MobileCompatibility get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.MobileCompatibility-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getMobileCompatibility()
    {
        $api = 'MobileCompatibility';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getTeamSpace
     *
     * API method: SYNO.Foto.Setting.TeamSpace get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.TeamSpace-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getTeamSpace()
    {
        $api = 'TeamSpace';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getUser
     *
     * API method: SYNO.Foto.Setting.User get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.User-get.json
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

    /**
     * Summary of getWizard
     *
     * API method: SYNO.Foto.Setting.Wizard get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Setting.Wizard-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getWizard()
    {
        $api = 'Wizard';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
