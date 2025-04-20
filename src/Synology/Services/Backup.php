<?php

namespace Synology\Services;

/**
 * Class Backup - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup
 * @package Synology\Services
 */
class Backup extends BaseService
{
    public const API_SERVICE_NAME = 'Backup';
    public const API_VERSION = 1;

    /**
     * Summary of listConfigAutoBackup
     *
     * API method: SYNO.Backup.Config.AutoBackup list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Config.AutoBackup-list.json
     * @return array|bool|string|\stdClass
     */
    public function listConfigAutoBackup()
    {
        $api = 'Config.AutoBackup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listConfigBackup
     *
     * API method: SYNO.Backup.Config.Backup list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Config.Backup-list.json
     * @return array|bool|string|\stdClass
     */
    public function listConfigBackup()
    {
        $api = 'Config.Backup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getServiceNetworkBackup
     *
     * API method: SYNO.Backup.Service.NetworkBackup get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Service.NetworkBackup-get.json
     * @return array|bool|string|\stdClass
     */
    public function getServiceNetworkBackup()
    {
        $api = 'Service.NetworkBackup';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listApp2Backup
     *
     * API method: SYNO.Backup.App2.Backup list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.App2.Backup-list.json
     * @return array|bool|string|\stdClass
     */
    public function listApp2Backup()
    {
        $api = 'App2.Backup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRepository
     *
     * API method: SYNO.Backup.Repository list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Repository-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRepository()
    {
        $api = 'Repository';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listStorageShareLocal
     *
     * API method: SYNO.Backup.Storage.Share.Local list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Storage.Share.Local-list.json
     * @return array|bool|string|\stdClass
     */
    public function listStorageShareLocal()
    {
        $api = 'Storage.Share.Local';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTask
     *
     * API method: SYNO.Backup.Task list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Task-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTask()
    {
        $api = 'Task';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getTask
     *
     * API method: SYNO.Backup.Task get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Backup.Task-get.json
     * @return array|bool|string|\stdClass
     */
    public function getTask(int $task_id = 1)
    {
        $api = 'Task';
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
