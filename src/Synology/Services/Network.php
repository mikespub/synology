<?php

namespace Synology\Services;

/**
 * Class Network - created automatically by ServiceGenerator
 *
 * API: SYNO.Network
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Network
 * @package Synology\Services
 */
class Network extends BaseService
{
    public const API_SERVICE_NAME = 'Network';
    public const API_VERSION = 1;

    /**
     * Summary of getDHCPServerPXE
     *
     * API method: SYNO.Network.DHCPServer.PXE get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Network.DHCPServer.PXE-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDHCPServerPXE()
    {
        $api = 'DHCPServer.PXE';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDHCPServerVendor
     *
     * API method: SYNO.Network.DHCPServer.Vendor get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Network.DHCPServer.Vendor-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDHCPServerVendor()
    {
        $api = 'DHCPServer.Vendor';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
