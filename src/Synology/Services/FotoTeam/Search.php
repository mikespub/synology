<?php

namespace Synology\Services\FotoTeam;

use Synology\Services\BaseService;

/**
 * Class Search - created automatically by ServiceGenerator
 *
 * API: SYNO.FotoTeam.Search
 * ```
 * $result = $syno->fototeam()->search()->listFilter();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam#/FotoTeam.Search
 * @package Synology\Services\FotoTeam
 */
class Search extends BaseService
{
    public const API_SERVICE_NAME = 'FotoTeam.Search';
    public const API_VERSION = 2;

    /**
     * Summary of listFilter
     *
     * API method: SYNO.FotoTeam.Search.Filter list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.FotoTeam.Search.Filter-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFilter()
    {
        $api = 'Filter';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
