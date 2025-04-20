<?php

namespace Synology\Services;

/**
 * Class Auth - created automatically by ServiceGenerator
 *
 * API: SYNO.Auth
 * ```
 * $result = $syno->auth()->rescueemail()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Auth
 * @package Synology\Services
 */
class Auth extends BaseService
{
    public const API_SERVICE_NAME = 'Auth';
    public const API_VERSION = 1;
    protected ?Auth\RescueEmail $rescueemailSvc = null;

    /**
     * Summary of rescueemail
     *
     * API: SYNO.Auth.RescueEmail
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Auth#/Auth.RescueEmail
     * @return Auth\RescueEmail
     */
    public function rescueemail()
    {
        $this->rescueemailSvc ??= new Auth\RescueEmail($this->client);
        return $this->rescueemailSvc;
    }
}
