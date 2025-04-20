<?php

namespace Synology\Services\SecureSignIn;

use Synology\Services\BaseService;

/**
 * Class Authenticator - created automatically by ServiceGenerator
 *
 * API: SYNO.SecureSignIn.Authenticator
 * ```
 * $result = $syno->securesignin()->authenticator()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Authenticator
 * @package Synology\Services\SecureSignIn
 */
class Authenticator extends BaseService
{
    public const API_SERVICE_NAME = 'SecureSignIn.Authenticator';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.SecureSignIn.Authenticator list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Authenticator-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfo
     *
     * API method: SYNO.SecureSignIn.Authenticator.Info get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Authenticator.Info-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVerdict
     *
     * API method: SYNO.SecureSignIn.Authenticator.Verdict get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Authenticator.Verdict-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getVerdict()
    {
        $api = 'Verdict';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
