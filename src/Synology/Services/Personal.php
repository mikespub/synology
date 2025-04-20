<?php

namespace Synology\Services;

/**
 * Class Personal - created automatically by ServiceGenerator
 *
 * API: SYNO.Personal
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal
 * @package Synology\Services
 */
class Personal extends BaseService
{
    public const API_SERVICE_NAME = 'Personal';
    public const API_VERSION = 1;

    /**
     * Summary of getApplicationInfo
     *
     * API method: SYNO.Personal.Application.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Application.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getApplicationInfo()
    {
        $api = 'Application.Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getApplicationInfoLocal
     *
     * API method: SYNO.Personal.Application.Info.Local get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Application.Info.Local-get.json
     * @return array|bool|string|\stdClass
     */
    public function getApplicationInfoLocal()
    {
        $api = 'Application.Info.Local';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMailAccount
     *
     * API method: SYNO.Personal.MailAccount get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.MailAccount-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMailAccount()
    {
        $api = 'MailAccount';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNotificationDevice
     *
     * API method: SYNO.Personal.Notification.Device list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.Device-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNotificationDevice()
    {
        $api = 'Notification.Device';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNotificationGDPR
     *
     * API method: SYNO.Personal.Notification.GDPR get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.GDPR-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNotificationGDPR()
    {
        $api = 'Notification.GDPR';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNotificationIdentifier
     *
     * API method: SYNO.Personal.Notification.Identifier get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.Identifier-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNotificationIdentifier()
    {
        $api = 'Notification.Identifier';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNotificationToken
     *
     * API method: SYNO.Personal.Notification.Token get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.Token-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNotificationToken()
    {
        $api = 'Notification.Token';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNotificationVapidPublicKey
     *
     * API method: SYNO.Personal.Notification.VapidPublicKey get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.VapidPublicKey-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNotificationVapidPublicKey()
    {
        $api = 'Notification.VapidPublicKey';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProfile
     *
     * API method: SYNO.Personal.Profile list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Profile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listProfile()
    {
        $api = 'Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
