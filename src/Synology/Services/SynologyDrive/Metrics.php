<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Metrics - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Metrics
 * ```
 * $result = $syno->synologydrive()->metrics()->getToken();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Metrics
 * @package Synology\Services\SynologyDrive
 */
class Metrics extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Metrics';
    public const API_VERSION = 1;

    /**
     * Summary of getToken
     *
     * API method: SYNO.SynologyDrive.Metrics.Token get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Metrics.Token-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getToken()
    {
        $api = 'Token';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
