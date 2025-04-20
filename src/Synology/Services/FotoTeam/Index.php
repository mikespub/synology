<?php

namespace Synology\Services\FotoTeam;

use Synology\Services\BaseService;

/**
 * Class Index - created automatically by ServiceGenerator
 *
 * API: SYNO.FotoTeam.Index
 * ```
 * $result = $syno->fototeam()->index()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam#/FotoTeam.Index
 * @package Synology\Services\FotoTeam
 */
class Index extends BaseService
{
    public const API_SERVICE_NAME = 'FotoTeam.Index';
    public const API_VERSION = 2;

    /**
     * Summary of get
     *
     * API method: SYNO.FotoTeam.Index get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Index-get.json
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
