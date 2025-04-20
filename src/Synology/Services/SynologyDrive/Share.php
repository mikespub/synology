<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class Share - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.Share
 * ```
 * $result = $syno->synologydrive()->share()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Share
 * @package Synology\Services\SynologyDrive
 */
class Share extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.Share';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SynologyDrive.Share list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Share-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPriv
     *
     * API method: SYNO.SynologyDrive.Share.Priv list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Share.Priv-list.json
     * @return array<mixed>|bool|string|\stdClass
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
