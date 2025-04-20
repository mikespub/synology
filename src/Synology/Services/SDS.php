<?php

namespace Synology\Services;

/**
 * Class SDS - created automatically by ServiceGenerator
 *
 * API: SYNO.SDS
 * ```
 * $result = $syno->sds()->backup()->listClientCommonLog();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SDS
 * @package Synology\Services
 */
class SDS extends BaseService
{
    public const API_SERVICE_NAME = 'SDS';
    public const API_VERSION = 1;
    protected ?SDS\Backup $backupSvc = null;

    /**
     * Summary of backup
     *
     * API: SYNO.SDS.Backup
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SDS#/SDS.Backup
     * @return SDS\Backup
     */
    public function backup()
    {
        $this->backupSvc ??= new SDS\Backup($this->client);
        return $this->backupSvc;
    }
}
