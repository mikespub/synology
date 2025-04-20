<?php

namespace Synology\Services\Foto;

use Synology\Services\BaseService;

/**
 * Class Search - created automatically by ServiceGenerator
 *
 * API: SYNO.Foto.Search
 * ```
 * $result = $syno->foto()->search()->listFilter();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Search
 * @package Synology\Services\Foto
 */
class Search extends BaseService
{
    public const API_SERVICE_NAME = 'Foto.Search';
    public const API_VERSION = 5;

    /**
     * Summary of listFilter
     *
     * API method: SYNO.Foto.Search.Filter list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Search.Filter-list.json
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
