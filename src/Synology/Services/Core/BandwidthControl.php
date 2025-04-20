<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class BandwidthControl - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.BandwidthControl
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.BandwidthControl
 * @package Synology\Services\Core
 */
class BandwidthControl extends BaseService
{
    public const API_SERVICE_NAME = 'Core.BandwidthControl';
    public const API_VERSION = 1;

    /**
     * Summary of listStatus
     *
     * API method: SYNO.Core.BandwidthControl.Status list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.BandwidthControl.Status-list.json
     * @return array|bool|string|\stdClass
     */
    public function listStatus()
    {
        $api = 'Status';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
