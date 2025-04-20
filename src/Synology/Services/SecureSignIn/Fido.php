<?php

namespace Synology\Services\SecureSignIn;

use Synology\Services\BaseService;

/**
 * Class Fido - created automatically by ServiceGenerator
 *
 * API: SYNO.SecureSignIn.Fido
 * ```
 * $result = $syno->securesignin()->fido()->listManage();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Fido
 * @package Synology\Services\SecureSignIn
 */
class Fido extends BaseService
{
    public const API_SERVICE_NAME = 'SecureSignIn.Fido';
    public const API_VERSION = 1;

    /**
     * Summary of listManage
     *
     * API method: SYNO.SecureSignIn.Fido.Manage list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Fido.Manage-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listManage()
    {
        $api = 'Manage';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
