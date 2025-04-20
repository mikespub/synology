<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class ISCSI - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.ISCSI
 * ```
 * $result = $syno->core()->iscsi()->listFCTarget();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.ISCSI
 * @package Synology\Services\Core
 */
class ISCSI extends BaseService
{
    public const API_SERVICE_NAME = 'Core.ISCSI';
    public const API_VERSION = 1;

    /**
     * Summary of listFCTarget
     *
     * API method: SYNO.Core.ISCSI.FCTarget list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ISCSI.FCTarget-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listFCTarget()
    {
        $api = 'FCTarget';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listHost
     *
     * API method: SYNO.Core.ISCSI.Host list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ISCSI.Host-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listHost()
    {
        $api = 'Host';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLUN
     *
     * API method: SYNO.Core.ISCSI.LUN list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ISCSI.LUN-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listLUN()
    {
        $api = 'LUN';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNode
     *
     * API method: SYNO.Core.ISCSI.Node list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ISCSI.Node-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listNode()
    {
        $api = 'Node';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listReplication
     *
     * API method: SYNO.Core.ISCSI.Replication list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ISCSI.Replication-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listReplication()
    {
        $api = 'Replication';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTarget
     *
     * API method: SYNO.Core.ISCSI.Target list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ISCSI.Target-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listTarget()
    {
        $api = 'Target';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listVMware
     *
     * API method: SYNO.Core.ISCSI.VMware list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ISCSI.VMware-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listVMware()
    {
        $api = 'VMware';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
