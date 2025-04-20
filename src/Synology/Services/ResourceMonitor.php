<?php

namespace Synology\Services;

/**
 * Class ResourceMonitor - created automatically by ServiceGenerator
 *
 * API: SYNO.ResourceMonitor
 * ```
 * $result = $syno->resourcemonitor()->eventrule()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor
 * @package Synology\Services
 */
class ResourceMonitor extends BaseService
{
    public const API_SERVICE_NAME = 'ResourceMonitor';
    public const API_VERSION = 1;
    protected ?ResourceMonitor\EventRule $eventruleSvc = null;
    protected ?ResourceMonitor\Log $logSvc = null;
    protected ?ResourceMonitor\Setting $settingSvc = null;

    /**
     * Summary of eventrule
     *
     * API: SYNO.ResourceMonitor.EventRule
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor#/ResourceMonitor.EventRule
     * @return ResourceMonitor\EventRule
     */
    public function eventrule()
    {
        $this->eventruleSvc ??= new ResourceMonitor\EventRule($this->client);
        return $this->eventruleSvc;
    }

    /**
     * Summary of log
     *
     * API: SYNO.ResourceMonitor.Log
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor#/ResourceMonitor.Log
     * @return ResourceMonitor\Log
     */
    public function log()
    {
        $this->logSvc ??= new ResourceMonitor\Log($this->client);
        return $this->logSvc;
    }

    /**
     * Summary of setting
     *
     * API: SYNO.ResourceMonitor.Setting
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor#/ResourceMonitor.Setting
     * @return ResourceMonitor\Setting
     */
    public function setting()
    {
        $this->settingSvc ??= new ResourceMonitor\Setting($this->client);
        return $this->settingSvc;
    }
}
