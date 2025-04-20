<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Web - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Web
 * ```
 * $result = $syno->core()->web()->getDSM();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Web
 * @package Synology\Services\Core
 */
class Web extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Web';
    public const API_VERSION = 1;

    /**
     * Summary of getDSM
     *
     * API method: SYNO.Core.Web.DSM get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Web.DSM-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDSM()
    {
        $api = 'DSM';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDSMExternal
     *
     * API method: SYNO.Core.Web.DSM.External get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Web.DSM.External-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDSMExternal()
    {
        $api = 'DSM.External';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSecurityHTTPCompression
     *
     * API method: SYNO.Core.Web.Security.HTTPCompression get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Web.Security.HTTPCompression-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSecurityHTTPCompression()
    {
        $api = 'Security.HTTPCompression';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSecurityTLSProfile
     *
     * API method: SYNO.Core.Web.Security.TLSProfile get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Web.Security.TLSProfile-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSecurityTLSProfile()
    {
        $api = 'Security.TLSProfile';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
