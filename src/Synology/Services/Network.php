<?php

namespace Synology\Services;

/**
 * Class Network - created automatically by ServiceGenerator
 *
 * API: SYNO.Network
 * ```
 * $result = $syno->network()->dhcpserver()->getPXE();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Network
 * @package Synology\Services
 */
class Network extends BaseService
{
    public const API_SERVICE_NAME = 'Network';
    public const API_VERSION = 1;
    protected ?Network\DHCPServer $dhcpserverSvc = null;

    /**
     * Summary of dhcpserver
     *
     * API: SYNO.Network.DHCPServer
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Network#/Network.DHCPServer
     * @return Network\DHCPServer
     */
    public function dhcpserver()
    {
        $this->dhcpserverSvc ??= new Network\DHCPServer($this->client);
        return $this->dhcpserverSvc;
    }
}
