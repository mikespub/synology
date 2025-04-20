<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class AppPriv - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.AppPriv
 * ```
 * $result = $syno->core()->apppriv()->listApp();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.AppPriv
 * @package Synology\Services\Core
 */
class AppPriv extends BaseService
{
    public const API_SERVICE_NAME = 'Core.AppPriv';
    public const API_VERSION = 1;

    /**
     * Summary of listApp
     *
     * API method: SYNO.Core.AppPriv.App list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppPriv.App-list.json
     * @return array|bool|string|\stdClass
     */
    public function listApp()
    {
        $api = 'App';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
