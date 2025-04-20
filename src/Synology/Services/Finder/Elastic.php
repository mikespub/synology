<?php

namespace Synology\Services\Finder;

use Synology\Services\BaseService;

/**
 * Class Elastic - created automatically by ServiceGenerator
 *
 * API: SYNO.Finder.Elastic
 * ```
 * $result = $syno->finder()->elastic()->getSearchHistory();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.Elastic
 * @package Synology\Services\Finder
 */
class Elastic extends BaseService
{
    public const API_SERVICE_NAME = 'Finder.Elastic';
    public const API_VERSION = 1;

    /**
     * Summary of getSearchHistory
     *
     * API method: SYNO.Finder.Elastic.SearchHistory get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.Elastic.SearchHistory-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSearchHistory()
    {
        $api = 'SearchHistory';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
