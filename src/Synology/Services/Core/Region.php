<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Region - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Region
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Region
 * @package Synology\Services\Core
 */
class Region extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Region';
    public const API_VERSION = 1;

    /**
     * Summary of getLanguage
     *
     * API method: SYNO.Core.Region.Language get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Region.Language-get.json
     * @return array|bool|string|\stdClass
     */
    public function getLanguage()
    {
        $api = 'Language';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNTP
     *
     * API method: SYNO.Core.Region.NTP get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Region.NTP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNTP()
    {
        $api = 'NTP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNTPDateTimeFormat
     *
     * API method: SYNO.Core.Region.NTP.DateTimeFormat get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Region.NTP.DateTimeFormat-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNTPDateTimeFormat()
    {
        $api = 'NTP.DateTimeFormat';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNTPServer
     *
     * API method: SYNO.Core.Region.NTP.Server get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Region.NTP.Server-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNTPServer()
    {
        $api = 'NTP.Server';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
