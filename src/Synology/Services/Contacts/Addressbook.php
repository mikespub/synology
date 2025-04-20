<?php

namespace Synology\Services\Contacts;

use Synology\Services\BaseService;

/**
 * Class Addressbook - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts.Addressbook
 * ```
 * $result = $syno->contacts()->addressbook()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Addressbook
 * @package Synology\Services\Contacts
 */
class Addressbook extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts.Addressbook';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Contacts.Addressbook list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Addressbook-list.json
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
}
