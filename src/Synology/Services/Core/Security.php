<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Security - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Security
 * ```
 * $result = $syno->core()->security()->getAutoBlock();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Security
 * @package Synology\Services\Core
 */
class Security extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Security';
    public const API_VERSION = 1;

    /**
     * Summary of getAutoBlock
     *
     * API method: SYNO.Core.Security.AutoBlock get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.AutoBlock-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAutoBlock()
    {
        $api = 'AutoBlock';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFirewall
     *
     * API method: SYNO.Core.Security.Firewall get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.Firewall-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFirewall()
    {
        $api = 'Firewall';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFirewallAdapter
     *
     * API method: SYNO.Core.Security.Firewall.Adapter list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.Firewall.Adapter-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFirewallAdapter()
    {
        $api = 'Firewall.Adapter';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFirewallConf
     *
     * API method: SYNO.Core.Security.Firewall.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.Firewall.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFirewallConf()
    {
        $api = 'Firewall.Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFirewallGeoip
     *
     * API method: SYNO.Core.Security.Firewall.Geoip list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.Firewall.Geoip-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFirewallGeoip()
    {
        $api = 'Firewall.Geoip';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFirewallProfile
     *
     * API method: SYNO.Core.Security.Firewall.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.Firewall.Profile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFirewallProfile()
    {
        $api = 'Firewall.Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDSM
     *
     * API method: SYNO.Core.Security.DSM get (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.DSM-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDSM()
    {
        $api = 'DSM';
        $path = static::API_PATH;
        $method = 'get';
        $version = 5;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDSMEmbed
     *
     * API method: SYNO.Core.Security.DSM.Embed get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.DSM.Embed-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDSMEmbed()
    {
        $api = 'DSM.Embed';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDSMProxy
     *
     * API method: SYNO.Core.Security.DSM.Proxy get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Security.DSM.Proxy-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDSMProxy()
    {
        $api = 'DSM.Proxy';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
