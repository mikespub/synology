<?php

namespace Synology\Services\Office;

use Synology\Services\BaseService;

/**
 * Class Dictionary - created automatically by ServiceGenerator
 *
 * API: SYNO.Office.Dictionary
 * ```
 * $result = $syno->office()->dictionary()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Dictionary
 * @package Synology\Services\Office
 */
class Dictionary extends BaseService
{
    public const API_SERVICE_NAME = 'Office.Dictionary';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Office.Dictionary list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Dictionary-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
