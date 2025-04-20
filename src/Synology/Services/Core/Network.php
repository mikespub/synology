<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Network - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Network
 * ```
 * $result = $syno->core()->network()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Network
 * @package Synology\Services\Core
 */
class Network extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Network';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.Network get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network-get.json
     * @return array|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listBond
     *
     * API method: SYNO.Core.Network.Bond list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.Bond-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBond()
    {
        $api = 'Bond';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listEthernet
     *
     * API method: SYNO.Core.Network.Ethernet list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.Ethernet-list.json
     * @return array|bool|string|\stdClass
     */
    public function listEthernet()
    {
        $api = 'Ethernet';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listIPv6RouterPrefix
     *
     * API method: SYNO.Core.Network.IPv6.Router.Prefix list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.IPv6.Router.Prefix-list.json
     * @return array|bool|string|\stdClass
     */
    public function listIPv6RouterPrefix()
    {
        $api = 'IPv6.Router.Prefix';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listInterface
     *
     * API method: SYNO.Core.Network.Interface list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.Interface-list.json
     * @return array|bool|string|\stdClass
     */
    public function listInterface()
    {
        $api = 'Interface';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listOVS
     *
     * API method: SYNO.Core.Network.OVS list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.OVS-list.json
     * @return array|bool|string|\stdClass
     */
    public function listOVS()
    {
        $api = 'OVS';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPPPoE
     *
     * API method: SYNO.Core.Network.PPPoE list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.PPPoE-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPPPoE()
    {
        $api = 'PPPoE';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getProxy
     *
     * API method: SYNO.Core.Network.Proxy get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.Proxy-get.json
     * @return array|bool|string|\stdClass
     */
    public function getProxy()
    {
        $api = 'Proxy';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVPNL2TP
     *
     * API method: SYNO.Core.Network.VPN.L2TP list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.VPN.L2TP-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVPNL2TP()
    {
        $api = 'VPN.L2TP';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVPNOpenVPN
     *
     * API method: SYNO.Core.Network.VPN.OpenVPN list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.VPN.OpenVPN-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVPNOpenVPN()
    {
        $api = 'VPN.OpenVPN';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVPNOpenVPNWithConf
     *
     * API method: SYNO.Core.Network.VPN.OpenVPNWithConf list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.VPN.OpenVPNWithConf-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVPNOpenVPNWithConf()
    {
        $api = 'VPN.OpenVPNWithConf';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVPNPPTP
     *
     * API method: SYNO.Core.Network.VPN.PPTP list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network.VPN.PPTP-list.json
     * @return array|bool|string|\stdClass
     */
    public function listVPNPPTP()
    {
        $api = 'VPN.PPTP';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
