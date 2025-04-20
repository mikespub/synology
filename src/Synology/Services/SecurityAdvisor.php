<?php

namespace Synology\Services;

/**
 * Class SecurityAdvisor - created automatically by ServiceGenerator
 *
 * API: SYNO.SecurityAdvisor
 * ```
 * $result = $syno->securityadvisor()->conf()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecurityAdvisor
 * @package Synology\Services
 */
class SecurityAdvisor extends BaseService
{
    public const API_SERVICE_NAME = 'SecurityAdvisor';
    public const API_VERSION = 1;
    protected ?SecurityAdvisor\Conf $confSvc = null;
    protected ?SecurityAdvisor\LoginActivity $loginactivitySvc = null;

    /**
     * Summary of conf
     *
     * API: SYNO.SecurityAdvisor.Conf
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecurityAdvisor#/SecurityAdvisor.Conf
     * @return SecurityAdvisor\Conf
     */
    public function conf()
    {
        $this->confSvc ??= new SecurityAdvisor\Conf($this->client);
        return $this->confSvc;
    }

    /**
     * Summary of loginactivity
     *
     * API: SYNO.SecurityAdvisor.LoginActivity
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecurityAdvisor#/SecurityAdvisor.LoginActivity
     * @return SecurityAdvisor\LoginActivity
     */
    public function loginactivity()
    {
        $this->loginactivitySvc ??= new SecurityAdvisor\LoginActivity($this->client);
        return $this->loginactivitySvc;
    }
}
