<?php

namespace Synology\Services;

/**
 * Class Personal - created automatically by ServiceGenerator
 *
 * API: SYNO.Personal
 * ```
 * $result = $syno->personal()->application()->getInfo();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal
 * @package Synology\Services
 */
class Personal extends BaseService
{
    public const API_SERVICE_NAME = 'Personal';
    public const API_VERSION = 1;
    protected ?Personal\Application $applicationSvc = null;
    protected ?Personal\MailAccount $mailaccountSvc = null;
    protected ?Personal\Notification $notificationSvc = null;
    protected ?Personal\Profile $profileSvc = null;

    /**
     * Summary of application
     *
     * API: SYNO.Personal.Application
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.Application
     * @return Personal\Application
     */
    public function application()
    {
        $this->applicationSvc ??= new Personal\Application($this->client);
        return $this->applicationSvc;
    }

    /**
     * Summary of mailaccount
     *
     * API: SYNO.Personal.MailAccount
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.MailAccount
     * @return Personal\MailAccount
     */
    public function mailaccount()
    {
        $this->mailaccountSvc ??= new Personal\MailAccount($this->client);
        return $this->mailaccountSvc;
    }

    /**
     * Summary of notification
     *
     * API: SYNO.Personal.Notification
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.Notification
     * @return Personal\Notification
     */
    public function notification()
    {
        $this->notificationSvc ??= new Personal\Notification($this->client);
        return $this->notificationSvc;
    }

    /**
     * Summary of profile
     *
     * API: SYNO.Personal.Profile
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.Profile
     * @return Personal\Profile
     */
    public function profile()
    {
        $this->profileSvc ??= new Personal\Profile($this->client);
        return $this->profileSvc;
    }
}
