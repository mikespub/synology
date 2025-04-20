<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class HybridShare - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.HybridShare
 * ```
 * $result = $syno->synologydrive()->hybridshare()->listPrivilege();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.HybridShare
 * @package Synology\Services\SynologyDrive
 */
class HybridShare extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.HybridShare';
    public const API_VERSION = 1;

    /**
     * Summary of listPrivilege
     *
     * API method: SYNO.SynologyDrive.HybridShare.Privilege list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.HybridShare.Privilege-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listPrivilege()
    {
        $api = 'Privilege';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
