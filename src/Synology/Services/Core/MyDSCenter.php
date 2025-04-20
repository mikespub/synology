<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class MyDSCenter - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.MyDSCenter
 * ```
 * $result = $syno->core()->mydscenter()->getAccount();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.MyDSCenter
 * @package Synology\Services\Core
 */
class MyDSCenter extends BaseService
{
    public const API_SERVICE_NAME = 'Core.MyDSCenter';
    public const API_VERSION = 1;

    /**
     * Summary of getAccount
     *
     * API method: SYNO.Core.MyDSCenter.Account get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.MyDSCenter.Account-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getAccount()
    {
        $api = 'Account';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
