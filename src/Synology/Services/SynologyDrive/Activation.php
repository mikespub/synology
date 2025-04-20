<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Activation - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Activation
 * ```
 * $result = $syno->synologydrive()->activation()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Activation
 * @package Synology\Services\SynologyDrive
 */
class Activation extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Activation';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SynologyDrive.Activation get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Activation-get.json
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
