<?php

namespace Synology\Services\SynologyDrive;

use Synology\Services\BaseService;

/**
 * Class SCIM - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive.SCIM
 * ```
 * $result = $syno->synologydrive()->scim()->getPhoto();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.SCIM
 * @package Synology\Services\SynologyDrive
 */
class SCIM extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive.SCIM';
    public const API_VERSION = 1;

    /**
     * Summary of getPhoto
     *
     * API method: SYNO.SynologyDrive.SCIM.Photo get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.SCIM.Photo-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getPhoto()
    {
        $api = 'Photo';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
