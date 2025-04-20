<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class EventScheduler - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.EventScheduler
 * ```
 * $result = $syno->core()->eventscheduler()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.EventScheduler
 * @package Synology\Services\Core
 */
class EventScheduler extends BaseService
{
    public const API_SERVICE_NAME = 'Core.EventScheduler';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Core.EventScheduler list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.EventScheduler-list.json
     * @return array<mixed>|bool|string|\stdClass
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
