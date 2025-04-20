<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class DDNS - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.DDNS
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DDNS
 * @package Synology\Services\Core
 */
class DDNS extends BaseService
{
    public const API_SERVICE_NAME = 'Core.DDNS';
    public const API_VERSION = 1;

    /**
     * Summary of listEthernet
     *
     * API method: SYNO.Core.DDNS.Ethernet list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DDNS.Ethernet-list.json
     * @return array|bool|string|\stdClass
     */
    public function listEthernet()
    {
        $api = 'Ethernet';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listExtIP
     *
     * API method: SYNO.Core.DDNS.ExtIP list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DDNS.ExtIP-list.json
     * @return array|bool|string|\stdClass
     */
    public function listExtIP()
    {
        $api = 'ExtIP';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProvider
     *
     * API method: SYNO.Core.DDNS.Provider list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DDNS.Provider-list.json
     * @return array|bool|string|\stdClass
     */
    public function listProvider()
    {
        $api = 'Provider';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRecord
     *
     * API method: SYNO.Core.DDNS.Record list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DDNS.Record-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRecord()
    {
        $api = 'Record';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
