<?php

namespace Synology\Services;

/**
 * Class PersonMailAccount - created automatically by ServiceGenerator
 *
 * API: SYNO.PersonMailAccount
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=PersonMailAccount
 * @package Synology\Services
 */
class PersonMailAccount extends BaseService
{
    public const API_SERVICE_NAME = 'PersonMailAccount';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.PersonMailAccount get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.PersonMailAccount-get.json
     * @return array|bool|string|\stdClass
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
