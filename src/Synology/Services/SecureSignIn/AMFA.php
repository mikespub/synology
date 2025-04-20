<?php

namespace Synology\Services\SecureSignIn;

use Synology\Services\BaseService;

/**
 * Class AMFA - created automatically by ServiceGenerator
 *
 * API: SYNO.SecureSignIn.AMFA
 * ```
 * $result = $syno->securesignin()->amfa()->getPolicy();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.AMFA
 * @package Synology\Services\SecureSignIn
 */
class AMFA extends BaseService
{
    public const API_SERVICE_NAME = 'SecureSignIn.AMFA';
    public const API_VERSION = 1;

    /**
     * Summary of getPolicy
     *
     * API method: SYNO.SecureSignIn.AMFA.Policy get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.AMFA.Policy-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getPolicy()
    {
        $api = 'Policy';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSuggestConn
     *
     * API method: SYNO.SecureSignIn.AMFA.SuggestConn get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.AMFA.SuggestConn-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSuggestConn()
    {
        $api = 'SuggestConn';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
