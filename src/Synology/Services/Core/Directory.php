<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Directory - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Directory
 * ```
 * $result = $syno->core()->directory()->getAzureSSO();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Directory
 * @package Synology\Services\Core
 */
class Directory extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Directory';
    public const API_VERSION = 1;

    /**
     * Summary of getAzureSSO
     *
     * API method: SYNO.Core.Directory.Azure.SSO get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.Azure.SSO-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getAzureSSO()
    {
        $api = 'Azure.SSO';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDomainSchedule
     *
     * API method: SYNO.Core.Directory.Domain.Schedule get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.Domain.Schedule-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getDomainSchedule()
    {
        $api = 'Domain.Schedule';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getOIDCSSO
     *
     * API method: SYNO.Core.Directory.OIDC.SSO get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.OIDC.SSO-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getOIDCSSO()
    {
        $api = 'OIDC.SSO';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSSOCAS
     *
     * API method: SYNO.Core.Directory.SSO.CAS get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.SSO.CAS-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSSOCAS()
    {
        $api = 'SSO.CAS';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSSOProfile
     *
     * API method: SYNO.Core.Directory.SSO.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.SSO.Profile-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listSSOProfile()
    {
        $api = 'SSO.Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSSOSAML
     *
     * API method: SYNO.Core.Directory.SSO.SAML get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.SSO.SAML-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSSOSAML()
    {
        $api = 'SSO.SAML';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSSO
     *
     * API method: SYNO.Core.Directory.SSO get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.SSO-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSSO()
    {
        $api = 'SSO';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSSOIWA
     *
     * API method: SYNO.Core.Directory.SSO.IWA get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.SSO.IWA-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSSOIWA()
    {
        $api = 'SSO.IWA';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSSOSetting
     *
     * API method: SYNO.Core.Directory.SSO.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.SSO.Setting-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSSOSetting()
    {
        $api = 'SSO.Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getWebSphereSSO
     *
     * API method: SYNO.Core.Directory.WebSphere.SSO get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Directory.WebSphere.SSO-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getWebSphereSSO()
    {
        $api = 'WebSphere.SSO';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
