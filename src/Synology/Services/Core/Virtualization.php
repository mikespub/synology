<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Virtualization - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Virtualization
 * ```
 * $result = $syno->core()->virtualization()->getHostCapability();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Virtualization
 * @package Synology\Services\Core
 */
class Virtualization extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Virtualization';
    public const API_VERSION = 1;

    /**
     * Summary of getHostCapability
     *
     * API method: SYNO.Core.Virtualization.Host.Capability get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Virtualization.Host.Capability-get.json
     * @return array|bool|string|\stdClass
     */
    public function getHostCapability()
    {
        $api = 'Host.Capability';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
