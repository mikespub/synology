<?php

namespace Synology\Services;

/**
 * Class Backup - created automatically by ServiceGenerator
 *
 * API: SYNO.Backup
 * ```
 * $result = $syno->backup()->config()->listAutoBackup();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup
 * @package Synology\Services
 */
class Backup extends BaseService
{
    public const API_SERVICE_NAME = 'Backup';
    public const API_VERSION = 1;
    protected ?Backup\Config $configSvc = null;
    protected ?Backup\Service $serviceSvc = null;
    protected ?Backup\App2 $app2Svc = null;
    protected ?Backup\Repository $repositorySvc = null;
    protected ?Backup\Storage $storageSvc = null;
    protected ?Backup\Task $taskSvc = null;

    /**
     * Summary of config
     *
     * API: SYNO.Backup.Config
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Config
     * @return Backup\Config
     */
    public function config()
    {
        $this->configSvc ??= new Backup\Config($this->client);
        return $this->configSvc;
    }

    /**
     * Summary of service
     *
     * API: SYNO.Backup.Service
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Service
     * @return Backup\Service
     */
    public function service()
    {
        $this->serviceSvc ??= new Backup\Service($this->client);
        return $this->serviceSvc;
    }

    /**
     * Summary of app2
     *
     * API: SYNO.Backup.App2
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.App2
     * @return Backup\App2
     */
    public function app2()
    {
        $this->app2Svc ??= new Backup\App2($this->client);
        return $this->app2Svc;
    }

    /**
     * Summary of repository
     *
     * API: SYNO.Backup.Repository
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Repository
     * @return Backup\Repository
     */
    public function repository()
    {
        $this->repositorySvc ??= new Backup\Repository($this->client);
        return $this->repositorySvc;
    }

    /**
     * Summary of storage
     *
     * API: SYNO.Backup.Storage
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Storage
     * @return Backup\Storage
     */
    public function storage()
    {
        $this->storageSvc ??= new Backup\Storage($this->client);
        return $this->storageSvc;
    }

    /**
     * Summary of task
     *
     * API: SYNO.Backup.Task
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup#/Backup.Task
     * @return Backup\Task
     */
    public function task()
    {
        $this->taskSvc ??= new Backup\Task($this->client);
        return $this->taskSvc;
    }
}
