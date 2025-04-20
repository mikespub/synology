<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class Backup - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.Backup
 * ```
 * $result = $syno->webstation()->backup()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Backup
 * @package Synology\Services\WebStation
 */
class Backup extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.Backup';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.WebStation.Backup list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Backup-list.json
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
