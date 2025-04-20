<?php

namespace Synology\Services;

/**
 * Class Cal - created automatically by ServiceGenerator
 *
 * API: SYNO.Cal
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Cal
 * @package Synology\Services
 */
class Cal extends BaseService
{
    public const API_SERVICE_NAME = 'Cal';
    public const API_VERSION = 1;

    /**
     * Summary of listSharePriv
     *
     * API method: SYNO.Cal.Share.Priv list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Cal.Share.Priv-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSharePriv()
    {
        $api = 'Share.Priv';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTimezone
     *
     * API method: SYNO.Cal.Timezone list (5)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Cal.Timezone-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTimezone()
    {
        $api = 'Timezone';
        $path = static::API_PATH;
        $method = 'list';
        $version = 5;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
