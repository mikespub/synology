<?php

namespace Synology\Services\ActiveInsight;

use Synology\Services\BaseService;

/**
 * Class Setting - created automatically by ServiceGenerator
 *
 * API: SYNO.ActiveInsight.Setting
 * ```
 * $result = $syno->activeinsight()->setting()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ActiveInsight#/ActiveInsight.Setting
 * @package Synology\Services\ActiveInsight
 */
class Setting extends BaseService
{
    public const API_SERVICE_NAME = 'ActiveInsight.Setting';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.ActiveInsight.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ActiveInsight.Setting-get.json
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
}
