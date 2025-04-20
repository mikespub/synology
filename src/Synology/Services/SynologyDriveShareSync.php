<?php

namespace Synology\Services;

/**
 * Class SynologyDriveShareSync - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDriveShareSync
 * ```
 * $result = $syno->synologydrivesharesync()->config()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDriveShareSync
 * @package Synology\Services
 */
class SynologyDriveShareSync extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDriveShareSync';
    public const API_VERSION = 1;
    protected ?SynologyDriveShareSync\Config $configSvc = null;
    protected ?SynologyDriveShareSync\Connection $connectionSvc = null;

    /**
     * Summary of config
     *
     * API: SYNO.SynologyDriveShareSync.Config
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDriveShareSync#/SynologyDriveShareSync.Config
     * @return SynologyDriveShareSync\Config
     */
    public function config()
    {
        $this->configSvc ??= new SynologyDriveShareSync\Config($this->client);
        return $this->configSvc;
    }

    /**
     * Summary of connection
     *
     * API: SYNO.SynologyDriveShareSync.Connection
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDriveShareSync#/SynologyDriveShareSync.Connection
     * @return SynologyDriveShareSync\Connection
     */
    public function connection()
    {
        $this->connectionSvc ??= new SynologyDriveShareSync\Connection($this->client);
        return $this->connectionSvc;
    }
}
