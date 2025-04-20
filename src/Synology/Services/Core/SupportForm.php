<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class SupportForm - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.SupportForm
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SupportForm
 * @package Synology\Services\Core
 */
class SupportForm extends BaseService
{
    public const API_SERVICE_NAME = 'Core.SupportForm';
    public const API_VERSION = 1;

    /**
     * Summary of getForm
     *
     * API method: SYNO.Core.SupportForm.Form get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SupportForm.Form-get.json
     * @return array|bool|string|\stdClass
     */
    public function getForm()
    {
        $api = 'Form';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getService
     *
     * API method: SYNO.Core.SupportForm.Service get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SupportForm.Service-get.json
     * @return array|bool|string|\stdClass
     */
    public function getService()
    {
        $api = 'Service';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
