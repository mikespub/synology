<?php

namespace Synology\Services;

/**
 * Class SecureSignIn - created automatically by ServiceGenerator
 *
 * API: SYNO.SecureSignIn
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn
 * @package Synology\Services
 */
class SecureSignIn extends BaseService
{
    public const API_SERVICE_NAME = 'SecureSignIn';
    public const API_VERSION = 1;

    /**
     * Summary of getAMFAPolicy
     *
     * API method: SYNO.SecureSignIn.AMFA.Policy get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.AMFA.Policy-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAMFAPolicy()
    {
        $api = 'AMFA.Policy';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAMFASuggestConn
     *
     * API method: SYNO.SecureSignIn.AMFA.SuggestConn get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.AMFA.SuggestConn-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAMFASuggestConn()
    {
        $api = 'AMFA.SuggestConn';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listAuthenticator
     *
     * API method: SYNO.SecureSignIn.Authenticator list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Authenticator-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAuthenticator()
    {
        $api = 'Authenticator';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAuthenticatorInfo
     *
     * API method: SYNO.SecureSignIn.Authenticator.Info get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Authenticator.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAuthenticatorInfo()
    {
        $api = 'Authenticator.Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAuthenticatorVerdict
     *
     * API method: SYNO.SecureSignIn.Authenticator.Verdict get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Authenticator.Verdict-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAuthenticatorVerdict()
    {
        $api = 'Authenticator.Verdict';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFidoManage
     *
     * API method: SYNO.SecureSignIn.Fido.Manage list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Fido.Manage-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFidoManage()
    {
        $api = 'Fido.Manage';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMethod
     *
     * API method: SYNO.SecureSignIn.Method get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Method-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMethod()
    {
        $api = 'Method';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPackage
     *
     * API method: SYNO.SecureSignIn.Package get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecureSignIn.Package-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPackage()
    {
        $api = 'Package';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
