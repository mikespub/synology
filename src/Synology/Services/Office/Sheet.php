<?php

namespace Synology\Services\Office;

use Synology\Services\BaseService;

/**
 * Class Sheet - created automatically by ServiceGenerator
 *
 * API: SYNO.Office.Sheet
 * ```
 * $result = $syno->office()->sheet()->listMruFc();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Sheet
 * @package Synology\Services\Office
 */
class Sheet extends BaseService
{
    public const API_SERVICE_NAME = 'Office.Sheet';
    public const API_VERSION = 1;

    /**
     * Summary of listMruFc
     *
     * API method: SYNO.Office.Sheet.MruFc list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Sheet.MruFc-list.json
     * @return array|bool|string|\stdClass
     */
    public function listMruFc()
    {
        $api = 'MruFc';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
