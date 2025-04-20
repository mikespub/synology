<?php

namespace Synology\Services\SupportService;

use Synology\Services\BaseService;

/**
 * Class Setting - created automatically by ServiceGenerator
 *
 * API: SYNO.SupportService.Setting
 * ```
 * $result = $syno->supportservice()->setting()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SupportService#/SupportService.Setting
 * @package Synology\Services\SupportService
 */
class Setting extends BaseService
{
    public const API_SERVICE_NAME = 'SupportService.Setting';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SupportService.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SupportService.Setting-get.json
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
}
