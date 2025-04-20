<?php

namespace Synology\Services\DR;

use Synology\Services\BaseService;

/**
 * Class Node - created automatically by ServiceGenerator
 *
 * API: SYNO.DR.Node
 * ```
 * $result = $syno->dr()->node()->listCredential();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DR#/DR.Node
 * @package Synology\Services\DR
 */
class Node extends BaseService
{
    public const API_SERVICE_NAME = 'DR.Node';
    public const API_VERSION = 1;

    /**
     * Summary of listCredential
     *
     * API method: SYNO.DR.Node.Credential list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DR.Node.Credential-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listCredential()
    {
        $api = 'Credential';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
