<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Factory - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Factory
 * ```
 * $result = $syno->core()->factory()->getManutild();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Factory
 * @package Synology\Services\Core
 */
class Factory extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Factory';
    public const API_VERSION = 1;

    /**
     * Summary of getManutild
     *
     * API method: SYNO.Core.Factory.Manutild get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Factory.Manutild-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getManutild()
    {
        $api = 'Manutild';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
