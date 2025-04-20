<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Share - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Share
 * ```
 * $result = $syno->core()->share()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Share
 * @package Synology\Services\Core
 */
class Share extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Share';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Core.Share list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Share-list.json
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

    /**
     * Summary of listKeyManagerAutoKey
     *
     * API method: SYNO.Core.Share.KeyManager.AutoKey list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Share.KeyManager.AutoKey-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listKeyManagerAutoKey()
    {
        $api = 'KeyManager.AutoKey';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listKeyManagerKey
     *
     * API method: SYNO.Core.Share.KeyManager.Key list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Share.KeyManager.Key-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listKeyManagerKey()
    {
        $api = 'KeyManager.Key';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getKeyManagerMachineKey
     *
     * API method: SYNO.Core.Share.KeyManager.MachineKey get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Share.KeyManager.MachineKey-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getKeyManagerMachineKey()
    {
        $api = 'KeyManager.MachineKey';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
