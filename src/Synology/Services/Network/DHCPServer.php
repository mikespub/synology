<?php

namespace Synology\Services\Network;

use Synology\Services\BaseService;

/**
 * Class DHCPServer - created automatically by ServiceGenerator
 *
 * API: SYNO.Network.DHCPServer
 * ```
 * $result = $syno->network()->dhcpserver()->getPXE();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Network#/Network.DHCPServer
 * @package Synology\Services\Network
 */
class DHCPServer extends BaseService
{
    public const API_SERVICE_NAME = 'Network.DHCPServer';
    public const API_VERSION = 1;

    /**
     * Summary of getPXE
     *
     * API method: SYNO.Network.DHCPServer.PXE get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Network.DHCPServer.PXE-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getPXE()
    {
        $api = 'PXE';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVendor
     *
     * API method: SYNO.Network.DHCPServer.Vendor get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Network.DHCPServer.Vendor-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getVendor()
    {
        $api = 'Vendor';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
