<?php

namespace Synology\Services\Contacts;

use Synology\Services\BaseService;

/**
 * Class ExternalSource - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts.ExternalSource
 * ```
 * $result = $syno->contacts()->externalsource()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.ExternalSource
 * @package Synology\Services\Contacts
 */
class ExternalSource extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts.ExternalSource';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Contacts.ExternalSource list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.ExternalSource-list.json
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
