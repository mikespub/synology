<?php

namespace Synology\Services\Contacts;

use Synology\Services\BaseService;

/**
 * Class Contact - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts.Contact
 * ```
 * $result = $syno->contacts()->contact()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Contact
 * @package Synology\Services\Contacts
 */
class Contact extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts.Contact';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Contacts.Contact list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Contact-list.json
     * @return array<mixed>|bool|string|\stdClass
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
