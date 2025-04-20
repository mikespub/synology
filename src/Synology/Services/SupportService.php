<?php

namespace Synology\Services;

/**
 * Class SupportService - created automatically by ServiceGenerator
 *
 * API: SYNO.SupportService
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SupportService
 * @package Synology\Services
 */
class SupportService extends BaseService
{
    public const API_SERVICE_NAME = 'SupportService';
    public const API_VERSION = 1;

    /**
     * Summary of getSetting
     *
     * API method: SYNO.SupportService.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SupportService.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSetting()
    {
        $api = 'Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
