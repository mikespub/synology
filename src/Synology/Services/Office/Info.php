<?php

namespace Synology\Services\Office;

use Synology\Services\BaseService;

/**
 * Class Info - created automatically by ServiceGenerator
 *
 * API: SYNO.Office.Info
 * ```
 * $result = $syno->office()->info()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Info
 * @package Synology\Services\Office
 */
class Info extends BaseService
{
    public const API_SERVICE_NAME = 'Office.Info';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Office.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Info-get.json
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
     * Summary of getConstants
     *
     * API method: SYNO.Office.Info.Constants get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Info.Constants-get.json
     * @return array|bool|string|\stdClass
     */
    public function getConstants()
    {
        $api = 'Constants';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
