<?php

namespace Synology\Services;

/**
 * Class C2FS - created automatically by ServiceGenerator
 *
 * API: SYNO.C2FS
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=C2FS
 * @package Synology\Services
 */
class C2FS extends BaseService
{
    public const API_SERVICE_NAME = 'C2FS';
    public const API_VERSION = 1;

    /**
     * Summary of listShare
     *
     * API method: SYNO.C2FS.Share list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.C2FS.Share-list.json
     * @return array|bool|string|\stdClass
     */
    public function listShare()
    {
        $api = 'Share';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
