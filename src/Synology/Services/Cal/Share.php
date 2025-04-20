<?php

namespace Synology\Services\Cal;

use Synology\Services\BaseService;

/**
 * Class Share - created automatically by ServiceGenerator
 *
 * API: SYNO.Cal.Share
 * ```
 * $result = $syno->cal()->share()->listPriv();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Cal#/Cal.Share
 * @package Synology\Services\Cal
 */
class Share extends BaseService
{
    public const API_SERVICE_NAME = 'Cal.Share';
    public const API_VERSION = 1;

    /**
     * Summary of listPriv
     *
     * API method: SYNO.Cal.Share.Priv list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Cal.Share.Priv-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPriv()
    {
        $api = 'Priv';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
