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
    public function list(string $sort_by = "name", array $additional = ["last_bkp_time","last_bkp_result","get_source","is_modified","progress_title_type"])
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'sort_by' => json_encode($sort_by, JSON_UNESCAPED_SLASHES),
            'additional' => json_encode($additional, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of status
     *
     * API method: SYNO.Backup.Task status (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Task-status.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function status(int $task_id = 1, bool $blOnline = false, array $additional = ["last_bkp_time","next_bkp_time","last_bkp_result","is_modified","last_bkp_progress","last_bkp_success_version"])
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'status';
        $version = 1;
        $params = [
            'task_id' => $task_id,
            'blOnline' => json_encode($blOnline, JSON_UNESCAPED_SLASHES),
            'additional' => json_encode($additional, JSON_UNESCAPED_SLASHES),
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
    public function get(int $task_id = 1, array $additional = ["repository","schedule"])
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
            'task_id' => $task_id,
            'additional' => json_encode($additional, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
