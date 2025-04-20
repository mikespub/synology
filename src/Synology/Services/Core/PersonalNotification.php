<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class PersonalNotification - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.PersonalNotification
 * ```
 * $result = $syno->core()->personalnotification()->listDevice();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.PersonalNotification
 * @package Synology\Services\Core
 */
class PersonalNotification extends BaseService
{
    public const API_SERVICE_NAME = 'Core.PersonalNotification';
    public const API_VERSION = 1;

    /**
     * Summary of listDevice
     *
     * API method: SYNO.Core.PersonalNotification.Device list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.PersonalNotification.Device-list.json
     * @return array|bool|string|\stdClass
     */
    public function listDevice()
    {
        $api = 'Device';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
