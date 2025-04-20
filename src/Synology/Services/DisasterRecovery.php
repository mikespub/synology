<?php

namespace Synology\Services;

/**
 * Class DisasterRecovery - created automatically by ServiceGenerator
 *
 * API: SYNO.DisasterRecovery
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DisasterRecovery
 * @package Synology\Services
 */
class DisasterRecovery extends BaseService
{
    public const API_SERVICE_NAME = 'DisasterRecovery';
    public const API_VERSION = 1;

    /**
     * Summary of listLog
     *
     * API method: SYNO.DisasterRecovery.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DisasterRecovery.Log-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLog()
    {
        $api = 'Log';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
