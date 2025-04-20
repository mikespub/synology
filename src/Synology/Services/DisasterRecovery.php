<?php

namespace Synology\Services;

/**
 * Class DisasterRecovery - created automatically by ServiceGenerator
 *
 * API: SYNO.DisasterRecovery
 * ```
 * $result = $syno->disasterrecovery()->log()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DisasterRecovery
 * @package Synology\Services
 */
class DisasterRecovery extends BaseService
{
    public const API_SERVICE_NAME = 'DisasterRecovery';
    public const API_VERSION = 1;
    protected ?DisasterRecovery\Log $logSvc = null;

    /**
     * Summary of log
     *
     * API: SYNO.DisasterRecovery.Log
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DisasterRecovery#/DisasterRecovery.Log
     * @return DisasterRecovery\Log
     */
    public function log()
    {
        $this->logSvc ??= new DisasterRecovery\Log($this->client);
        return $this->logSvc;
    }
}
