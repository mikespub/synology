<?php

namespace Synology\Services;

/**
 * Class Storage - created automatically by ServiceGenerator
 *
 * API: SYNO.Storage
 * ```
 * $result = $syno->storage()->cgi()->getHddMan();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Storage
 * @package Synology\Services
 */
class Storage extends BaseService
{
    public const API_SERVICE_NAME = 'Storage';
    public const API_VERSION = 1;
    protected ?Storage\CGI $cgiSvc = null;

    /**
     * Summary of cgi
     *
     * API: SYNO.Storage.CGI
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Storage#/Storage.CGI
     * @return Storage\CGI
     */
    public function cgi()
    {
        $this->cgiSvc ??= new Storage\CGI($this->client);
        return $this->cgiSvc;
    }
}
