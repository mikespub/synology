<?php

namespace Synology\Services;

/**
 * Class C2FS - created automatically by ServiceGenerator
 *
 * API: SYNO.C2FS
 * ```
 * $result = $syno->c2fs()->share()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=C2FS
 * @package Synology\Services
 */
class C2FS extends BaseService
{
    public const API_SERVICE_NAME = 'C2FS';
    public const API_VERSION = 1;
    protected ?C2FS\Share $shareSvc = null;

    /**
     * Summary of share
     *
     * API: SYNO.C2FS.Share
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=C2FS#/C2FS.Share
     * @return C2FS\Share
     */
    public function share()
    {
        $this->shareSvc ??= new C2FS\Share($this->client);
        return $this->shareSvc;
    }
}
