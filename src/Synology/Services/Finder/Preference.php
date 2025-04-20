<?php

namespace Synology\Services\Finder;

use Synology\Services\BaseService;

/**
 * Class Preference - created automatically by ServiceGenerator
 *
 * API: SYNO.Finder.Preference
 * ```
 * $result = $syno->finder()->preference()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.Preference
 * @package Synology\Services\Finder
 */
class Preference extends BaseService
{
    public const API_SERVICE_NAME = 'Finder.Preference';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Finder.Preference get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Finder.Preference-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
