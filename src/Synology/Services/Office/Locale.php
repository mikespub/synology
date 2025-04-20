<?php

namespace Synology\Services\Office;

use Synology\Services\BaseService;

/**
 * Class Locale - created automatically by ServiceGenerator
 *
 * API: SYNO.Office.Locale
 * ```
 * $result = $syno->office()->locale()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Locale
 * @package Synology\Services\Office
 */
class Locale extends BaseService
{
    public const API_SERVICE_NAME = 'Office.Locale';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Office.Locale list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Locale-list.json
     * @return array|bool|string|\stdClass
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
