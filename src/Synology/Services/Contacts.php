<?php

namespace Synology\Services;

/**
 * Class Contacts - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts
 * @package Synology\Services
 */
class Contacts extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts';
    public const API_VERSION = 1;

    /**
     * Summary of listAddressbook
     *
     * API method: SYNO.Contacts.Addressbook list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Addressbook-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAddressbook()
    {
        $api = 'Addressbook';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAdminSetting
     *
     * API method: SYNO.Contacts.AdminSetting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.AdminSetting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAdminSetting()
    {
        $api = 'AdminSetting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listContact
     *
     * API method: SYNO.Contacts.Contact list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Contact-list.json
     * @return array|bool|string|\stdClass
     */
    public function listContact()
    {
        $api = 'Contact';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listExternalSource
     *
     * API method: SYNO.Contacts.ExternalSource list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.ExternalSource-list.json
     * @return array|bool|string|\stdClass
     */
    public function listExternalSource()
    {
        $api = 'ExternalSource';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfo
     *
     * API method: SYNO.Contacts.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLabel
     *
     * API method: SYNO.Contacts.Label list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Contacts.Label-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLabel()
    {
        $api = 'Label';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
