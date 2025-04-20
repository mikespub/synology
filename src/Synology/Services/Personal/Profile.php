<?php

namespace Synology\Services\Personal;

use Synology\Services\BaseService;

/**
 * Class Profile - created automatically by ServiceGenerator
 *
 * API: SYNO.Personal.Profile
 * ```
 * $result = $syno->personal()->profile()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.Profile
 * @package Synology\Services\Personal
 */
class Profile extends BaseService
{
    public const API_SERVICE_NAME = 'Personal.Profile';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Personal.Profile list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.Profile-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
