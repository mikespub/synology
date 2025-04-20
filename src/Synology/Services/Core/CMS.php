<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class CMS - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.CMS
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.CMS
 * @package Synology\Services\Core
 */
class CMS extends BaseService
{
    public const API_SERVICE_NAME = 'Core.CMS';
    public const API_VERSION = 1;

    /**
     * Summary of getInfo
     *
     * API method: SYNO.Core.CMS.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.CMS.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
