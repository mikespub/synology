<?php

namespace Synology\Services\Contacts;

use Synology\Services\BaseService;

/**
 * Class Label - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts.Label
 * ```
 * $result = $syno->contacts()->label()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Label
 * @package Synology\Services\Contacts
 */
class Label extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts.Label';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Contacts.Label list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Label-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
