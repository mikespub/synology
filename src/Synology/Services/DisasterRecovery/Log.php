<?php

namespace Synology\Services\DisasterRecovery;

use Synology\Services\BaseService;

/**
 * Class Log - created automatically by ServiceGenerator
 *
 * API: SYNO.DisasterRecovery.Log
 * ```
 * $result = $syno->disasterrecovery()->log()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DisasterRecovery#/DisasterRecovery.Log
 * @package Synology\Services\DisasterRecovery
 */
class Log extends BaseService
{
    public const API_SERVICE_NAME = 'DisasterRecovery.Log';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.DisasterRecovery.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DisasterRecovery.Log-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
