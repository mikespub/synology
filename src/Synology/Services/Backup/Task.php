<?php

namespace Synology\Services\Backup;

use Synology\Services\BaseService;

/**
 * Class Task - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup.Task
 * ```
 * $result = $syno->backup()->task()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Task
 * @package Synology\Services\Backup
 */
class Task extends BaseService
{
    public const API_SERVICE_NAME = 'Backup.Task';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Backup.Task list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Task-list.json
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

    /**
     * Summary of get
     *
     * API method: SYNO.Backup.Task get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Task-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function get(int $task_id = 1)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
            'task_id' => $task_id,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
