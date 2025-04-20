<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class SNMP - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.SNMP
 * ```
 * $result = $syno->core()->snmp()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SNMP
 * @package Synology\Services\Core
 */
class SNMP extends BaseService
{
    public const API_SERVICE_NAME = 'Core.SNMP';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.SNMP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SNMP-get.json
     * @return array|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
