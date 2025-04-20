<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class SmartBlock - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.SmartBlock
 * ```
 * $result = $syno->core()->smartblock()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SmartBlock
 * @package Synology\Services\Core
 */
class SmartBlock extends BaseService
{
    public const API_SERVICE_NAME = 'Core.SmartBlock';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Core.SmartBlock get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SmartBlock-get.json
     * @return array<mixed>|bool|string|\stdClass
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

    /**
     * Summary of listTrusted
     *
     * API method: SYNO.Core.SmartBlock.Trusted list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SmartBlock.Trusted-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listTrusted()
    {
        $api = 'Trusted';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listUntrusted
     *
     * API method: SYNO.Core.SmartBlock.Untrusted list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SmartBlock.Untrusted-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listUntrusted()
    {
        $api = 'Untrusted';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listUser
     *
     * API method: SYNO.Core.SmartBlock.User list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SmartBlock.User-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listUser()
    {
        $api = 'User';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
