<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class SecurityScan - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.SecurityScan
 * ```
 * $result = $syno->core()->securityscan()->getConf();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SecurityScan
 * @package Synology\Services\Core
 */
class SecurityScan extends BaseService
{
    public const API_SERVICE_NAME = 'Core.SecurityScan';
    public const API_VERSION = 1;

    /**
     * Summary of getConf
     *
     * API method: SYNO.Core.SecurityScan.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SecurityScan.Conf-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getConf()
    {
        $api = 'Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
