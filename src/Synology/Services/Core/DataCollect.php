<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class DataCollect - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.DataCollect
 * ```
 * $result = $syno->core()->datacollect()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DataCollect
 * @package Synology\Services\Core
 */
class DataCollect extends BaseService
{
    public const API_SERVICE_NAME = 'Core.DataCollect';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.DataCollect get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DataCollect-get.json
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
