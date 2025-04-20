<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Node - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Node
 * ```
 * $result = $syno->synologydrive()->node()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Node
 * @package Synology\Services\SynologyDrive
 */
class Node extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Node';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Node list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Node-list.json
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
