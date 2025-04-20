<?php

namespace Synology\Services\Contacts;

use Synology\Services\BaseService;

/**
 * Class AdminSetting - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts.AdminSetting
 * ```
 * $result = $syno->contacts()->adminsetting()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.AdminSetting
 * @package Synology\Services\Contacts
 */
class AdminSetting extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts.AdminSetting';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Contacts.AdminSetting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.AdminSetting-get.json
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
