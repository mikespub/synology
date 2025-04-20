<?php

namespace Synology\Services;

/**
 * Class S2S - created automatically by ServiceGenerator
 *
 * API: SYNO.S2S
 * ```
 * $result = $syno->s2s()->server()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=S2S
 * @package Synology\Services
 */
class S2S extends BaseService
{
    public const API_SERVICE_NAME = 'S2S';
    public const API_VERSION = 1;
    protected ?S2S\Server $serverSvc = null;
    protected ?S2S\Client $clientSvc = null;

    /**
     * Summary of server
     *
     * API: SYNO.S2S.Server
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=S2S#/S2S.Server
     * @return S2S\Server
     */
    public function server()
    {
        $this->serverSvc ??= new S2S\Server($this->client);
        return $this->serverSvc;
    }

    /**
     * Summary of client
     *
     * API: SYNO.S2S.Client
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=S2S#/S2S.Client
     * @return S2S\Client
     */
    public function client()
    {
        $this->clientSvc ??= new S2S\Client($this->client);
        return $this->clientSvc;
    }
}
