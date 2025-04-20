<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Certificate - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Certificate
 * ```
 * $result = $syno->core()->certificate()->listCRT();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Certificate
 * @package Synology\Services\Core
 */
class Certificate extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Certificate';
    public const API_VERSION = 1;

    /**
     * Summary of listCRT
     *
     * API method: SYNO.Core.Certificate.CRT list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Certificate.CRT-list.json
     * @return array|bool|string|\stdClass
     */
    public function listCRT()
    {
        $api = 'CRT';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLetsEncryptAccount
     *
     * API method: SYNO.Core.Certificate.LetsEncrypt.Account list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Certificate.LetsEncrypt.Account-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLetsEncryptAccount()
    {
        $api = 'LetsEncrypt.Account';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
