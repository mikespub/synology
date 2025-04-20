<?php

namespace Synology\Services\Backup;

use Synology\Services\BaseService;

/**
 * Class Repository - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup.Repository
 * ```
 * $result = $syno->backup()->repository()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Repository
 * @package Synology\Services\Backup
 */
class Repository extends BaseService
{
    public const API_SERVICE_NAME = 'Backup.Repository';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Backup.Repository list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Repository-list.json
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
