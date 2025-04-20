<?php

namespace Synology\Services;

/**
 * Class Remote - created automatically by ServiceGenerator
 *
 * API: SYNO.Remote
 * ```
 * $result = $syno->remote()->credential()->getChallenge();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Remote
 * @package Synology\Services
 */
class Remote extends BaseService
{
    public const API_SERVICE_NAME = 'Remote';
    public const API_VERSION = 1;
    protected ?Remote\Credential $credentialSvc = null;

    /**
     * Summary of credential
     *
     * API: SYNO.Remote.Credential
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Remote#/Remote.Credential
     * @return Remote\Credential
     */
    public function credential()
    {
        $this->credentialSvc ??= new Remote\Credential($this->client);
        return $this->credentialSvc;
    }
}
