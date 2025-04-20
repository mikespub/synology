<?php

namespace Synology\Services\Office;

use Synology\Services\BaseService;

/**
 * Class Setting - created automatically by ServiceGenerator
 *
 * API: SYNO.Office.Setting
 * ```
 * $result = $syno->office()->setting()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Setting
 * @package Synology\Services\Office
 */
class Setting extends BaseService
{
    public const API_SERVICE_NAME = 'Office.Setting';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Office.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Setting-get.json
     * @return array|bool|string|\stdClass
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
     * Summary of listFont
     *
     * API method: SYNO.Office.Setting.Font list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Setting.Font-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFont()
    {
        $api = 'Font';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSystem
     *
     * API method: SYNO.Office.Setting.System get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Setting.System-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSystem()
    {
        $api = 'System';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
