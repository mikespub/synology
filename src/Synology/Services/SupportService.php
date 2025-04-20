<?php

namespace Synology\Services;

/**
 * Class SupportService - created automatically by ServiceGenerator
 *
 * API: SYNO.SupportService
 * ```
 * $result = $syno->supportservice()->setting()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SupportService
 * @package Synology\Services
 */
class SupportService extends BaseService
{
    public const API_SERVICE_NAME = 'SupportService';
    public const API_VERSION = 1;
    protected ?SupportService\Setting $settingSvc = null;

    /**
     * Summary of setting
     *
     * API: SYNO.SupportService.Setting
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SupportService#/SupportService.Setting
     * @return SupportService\Setting
     */
    public function setting()
    {
        $this->settingSvc ??= new SupportService\Setting($this->client);
        return $this->settingSvc;
    }
}
