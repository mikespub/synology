<?php

namespace Synology\Services;

/**
 * Class OAUTH - created automatically by ServiceGenerator
 *
 * API: SYNO.OAUTH
 * ```
 * $result = $syno->oauth()->client()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH
 * @package Synology\Services
 */
class OAUTH extends BaseService
{
    public const API_SERVICE_NAME = 'OAUTH';
    public const API_VERSION = 1;
    protected ?OAUTH\Client $clientSvc = null;
    protected ?OAUTH\Common $commonSvc = null;
    protected ?OAUTH\Log $logSvc = null;
    protected ?OAUTH\Token $tokenSvc = null;

    /**
     * Summary of client
     *
     * API: SYNO.OAUTH.Client
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Client
     * @return OAUTH\Client
     */
    public function client()
    {
        $this->clientSvc ??= new OAUTH\Client($this->client);
        return $this->clientSvc;
    }

    /**
     * Summary of common
     *
     * API: SYNO.OAUTH.Common
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Common
     * @return OAUTH\Common
     */
    public function common()
    {
        $this->commonSvc ??= new OAUTH\Common($this->client);
        return $this->commonSvc;
    }

    /**
     * Summary of log
     *
     * API: SYNO.OAUTH.Log
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Log
     * @return OAUTH\Log
     */
    public function log()
    {
        $this->logSvc ??= new OAUTH\Log($this->client);
        return $this->logSvc;
    }

    /**
     * Summary of token
     *
     * API: SYNO.OAUTH.Token
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH#/OAUTH.Token
     * @return OAUTH\Token
     */
    public function token()
    {
        $this->tokenSvc ??= new OAUTH\Token($this->client);
        return $this->tokenSvc;
    }
}
