<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class EW - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.EW
 * ```
 * $result = $syno->core()->ew()->getInfo();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.EW
 * @package Synology\Services\Core
 */
class EW extends BaseService
{
    public const API_SERVICE_NAME = 'Core.EW';
    public const API_VERSION = 1;

    /**
     * Summary of getInfo
     *
     * API method: SYNO.Core.EW.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.EW.Info-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
