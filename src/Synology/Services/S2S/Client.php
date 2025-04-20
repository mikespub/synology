<?php

namespace Synology\Services\S2S;

use Synology\Services\BaseService;

/**
 * Class Client - created automatically by ServiceGenerator
 *
 * API: SYNO.S2S.Client
 * ```
 * $result = $syno->s2s()->client()->listJob();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=S2S#/S2S.Client
 * @package Synology\Services\S2S
 */
class Client extends BaseService
{
    public const API_SERVICE_NAME = 'S2S.Client';
    public const API_VERSION = 1;

    /**
     * Summary of listJob
     *
     * API method: SYNO.S2S.Client.Job list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.S2S.Client.Job-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listJob()
    {
        $api = 'Job';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
