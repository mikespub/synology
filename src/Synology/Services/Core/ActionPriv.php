<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class ActionPriv - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.ActionPriv
 * ```
 * $result = $syno->core()->actionpriv()->listRole();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.ActionPriv
 * @package Synology\Services\Core
 */
class ActionPriv extends BaseService
{
    public const API_SERVICE_NAME = 'Core.ActionPriv';
    public const API_VERSION = 1;

    /**
     * Summary of listRole
     *
     * API method: SYNO.Core.ActionPriv.Role list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ActionPriv.Role-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRole()
    {
        $api = 'Role';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
