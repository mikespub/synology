<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Polling - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Polling
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Polling
 * @package Synology\Services\Core
 */
class Polling extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Polling';
    public const API_VERSION = 1;

    /**
     * Summary of getData
     *
     * API method: SYNO.Core.Polling.Data get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Polling.Data-get.json
     * @return array|bool|string|\stdClass
     */
    public function getData()
    {
        $api = 'Data';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
