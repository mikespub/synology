<?php

namespace Synology\Services\Remote;

use Synology\Services\BaseService;

/**
 * Class Credential - created automatically by ServiceGenerator
 *
 * API: SYNO.Remote.Credential
 * ```
 * $result = $syno->remote()->credential()->getChallenge();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Remote#/Remote.Credential
 * @package Synology\Services\Remote
 */
class Credential extends BaseService
{
    public const API_SERVICE_NAME = 'Remote.Credential';
    public const API_VERSION = 1;

    /**
     * Summary of getChallenge
     *
     * API method: SYNO.Remote.Credential.Challenge get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Remote.Credential.Challenge-get.json
     * @return array|bool|string|\stdClass
     */
    public function getChallenge()
    {
        $api = 'Challenge';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
