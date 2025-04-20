<?php

namespace Synology\Services\Foto;

use Synology\Services\BaseService;

/**
 * Class Index - created automatically by ServiceGenerator
 *
 * API: SYNO.Foto.Index
 * ```
 * $result = $syno->foto()->index()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Index
 * @package Synology\Services\Foto
 */
class Index extends BaseService
{
    public const API_SERVICE_NAME = 'Foto.Index';
    public const API_VERSION = 5;

    /**
     * Summary of get
     *
     * API method: SYNO.Foto.Index get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Index-get.json
     * @return array|bool|string|\stdClass
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
