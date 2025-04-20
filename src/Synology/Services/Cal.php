<?php

namespace Synology\Services;

/**
 * Class Cal - created automatically by ServiceGenerator
 *
 * API: SYNO.Cal
 * ```
 * $result = $syno->cal()->listTimezone();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Cal
 * @package Synology\Services
 */
class Cal extends BaseService
{
    public const API_SERVICE_NAME = 'Cal';
    public const API_VERSION = 1;
    protected ?Cal\Share $shareSvc = null;

    /**
     * Summary of share
     *
     * API: SYNO.Cal.Share
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Cal#/Cal.Share
     * @return Cal\Share
     */
    public function share()
    {
        $this->shareSvc ??= new Cal\Share($this->client);
        return $this->shareSvc;
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
