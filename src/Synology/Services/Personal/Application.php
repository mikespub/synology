<?php

namespace Synology\Services\Personal;

use Synology\Services\BaseService;

/**
 * Class Application - created automatically by ServiceGenerator
 *
 * API: SYNO.Personal.Application
 * ```
 * $result = $syno->personal()->application()->getInfo();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.Application
 * @package Synology\Services\Personal
 */
class Application extends BaseService
{
    public const API_SERVICE_NAME = 'Personal.Application';
    public const API_VERSION = 1;

    /**
     * Summary of getInfo
     *
     * API method: SYNO.Personal.Application.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Application.Info-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfoLocal
     *
     * API method: SYNO.Personal.Application.Info.Local get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Application.Info.Local-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getInfoLocal()
    {
        $api = 'Info.Local';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
