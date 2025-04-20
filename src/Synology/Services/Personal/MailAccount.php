<?php

namespace Synology\Services\Personal;

use Synology\Services\BaseService;

/**
 * Class MailAccount - created automatically by ServiceGenerator
 *
 * API: SYNO.Personal.MailAccount
 * ```
 * $result = $syno->personal()->mailaccount()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal#/Personal.MailAccount
 * @package Synology\Services\Personal
 */
class MailAccount extends BaseService
{
    public const API_SERVICE_NAME = 'Personal.MailAccount';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.Personal.MailAccount get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Personal.MailAccount-get.json
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
