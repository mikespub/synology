<?php

namespace Synology\Services;

/**
 * Class DR - created automatically by ServiceGenerator
 *
 * API: SYNO.DR
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DR
 * @package Synology\Services
 */
class DR extends BaseService
{
    public const API_SERVICE_NAME = 'DR';
    public const API_VERSION = 1;

    /**
     * Summary of listNodeCredential
     *
     * API method: SYNO.DR.Node.Credential list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DR.Node.Credential-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNodeCredential()
    {
        $api = 'Node.Credential';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
