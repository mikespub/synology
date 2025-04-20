<?php

namespace Synology\Services;

/**
 * Class Remote - created automatically by ServiceGenerator
 *
 * API: SYNO.Remote
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Remote
 * @package Synology\Services
 */
class Remote extends BaseService
{
    public const API_SERVICE_NAME = 'Remote';
    public const API_VERSION = 1;

    /**
     * Summary of getCredentialChallenge
     *
     * API method: SYNO.Remote.Credential.Challenge get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Remote.Credential.Challenge-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCredentialChallenge()
    {
        $api = 'Credential.Challenge';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
