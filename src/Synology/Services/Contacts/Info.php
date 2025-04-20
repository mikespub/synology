<?php

namespace Synology\Services\Contacts;

use Synology\Services\BaseService;

/**
 * Class Info - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts.Info
 * ```
 * $result = $syno->contacts()->info()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Info
 * @package Synology\Services\Contacts
 */
class Info extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts.Info';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Contacts.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Info-get.json
     * @return array|bool|string|\stdClass
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
