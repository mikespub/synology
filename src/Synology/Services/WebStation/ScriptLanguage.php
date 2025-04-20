<?php

namespace Synology\Services\WebStation;

use Synology\Services\BaseService;

/**
 * Class ScriptLanguage - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation.ScriptLanguage
 * ```
 * $result = $syno->webstation()->scriptlanguage()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.ScriptLanguage
 * @package Synology\Services\WebStation
 */
class ScriptLanguage extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation.ScriptLanguage';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.WebStation.ScriptLanguage list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.ScriptLanguage-list.json
     * @return array|bool|string|\stdClass
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
     * Summary of getUtils
     *
     * API method: SYNO.WebStation.ScriptLanguage.Utils get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.ScriptLanguage.Utils-get.json
     * @return array|bool|string|\stdClass
     */
    public function getUtils()
    {
        $api = 'Utils';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
