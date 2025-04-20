<?php

namespace Synology\Services\C2FS;

use Synology\Services\BaseService;

/**
 * Class Share - created automatically by ServiceGenerator
 *
 * API: SYNO.C2FS.Share
 * ```
 * $result = $syno->c2fs()->share()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=C2FS#/C2FS.Share
 * @package Synology\Services\C2FS
 */
class Share extends BaseService
{
    public const API_SERVICE_NAME = 'C2FS.Share';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.C2FS.Share list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.C2FS.Share-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
