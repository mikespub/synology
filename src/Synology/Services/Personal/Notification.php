<?php

namespace Synology\Services\Personal;

use Synology\Services\BaseService;

/**
 * Class Notification - created automatically by ServiceGenerator
 *
 * API: SYNO.Personal.Notification
 * ```
 * $result = $syno->personal()->notification()->listDevice();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.Notification
 * @package Synology\Services\Personal
 */
class Notification extends BaseService
{
    public const API_SERVICE_NAME = 'Personal.Notification';
    public const API_VERSION = 1;

    /**
     * Summary of listDevice
     *
     * API method: SYNO.Personal.Notification.Device list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.Device-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listDevice()
    {
        $api = 'Device';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getGDPR
     *
     * API method: SYNO.Personal.Notification.GDPR get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.GDPR-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getGDPR()
    {
        $api = 'GDPR';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getIdentifier
     *
     * API method: SYNO.Personal.Notification.Identifier get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.Identifier-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getIdentifier()
    {
        $api = 'Identifier';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getToken
     *
     * API method: SYNO.Personal.Notification.Token get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.Token-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getToken()
    {
        $api = 'Token';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVapidPublicKey
     *
     * API method: SYNO.Personal.Notification.VapidPublicKey get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Notification.VapidPublicKey-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getVapidPublicKey()
    {
        $api = 'VapidPublicKey';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
