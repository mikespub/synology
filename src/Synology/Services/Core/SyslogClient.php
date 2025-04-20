<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class SyslogClient - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.SyslogClient
 * ```
 * $result = $syno->core()->syslogclient()->getFileTransfer();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SyslogClient
 * @package Synology\Services\Core
 */
class SyslogClient extends BaseService
{
    public const API_SERVICE_NAME = 'Core.SyslogClient';
    public const API_VERSION = 1;

    /**
     * Summary of getFileTransfer
     *
     * API method: SYNO.Core.SyslogClient.FileTransfer get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SyslogClient.FileTransfer-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFileTransfer()
    {
        $api = 'FileTransfer';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLog
     *
     * API method: SYNO.Core.SyslogClient.Log list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SyslogClient.Log-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLog()
    {
        $api = 'Log';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingNotify
     *
     * API method: SYNO.Core.SyslogClient.Setting.Notify get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SyslogClient.Setting.Notify-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingNotify()
    {
        $api = 'Setting.Notify';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
