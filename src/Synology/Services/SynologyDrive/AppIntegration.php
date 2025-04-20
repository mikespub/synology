<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class AppIntegration - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.AppIntegration
 * ```
 * $result = $syno->synologydrive()->appintegration()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.AppIntegration
 * @package Synology\Services\SynologyDrive
 */
class AppIntegration extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.AppIntegration';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.AppIntegration list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.AppIntegration-list.json
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
