<?php

namespace Synology\Services\Foto;

use Synology\Services\BaseService;

/**
 * Class PhotoRequest - created automatically by ServiceGenerator
 *
 * API: SYNO.Foto.PhotoRequest
 * ```
 * $result = $syno->foto()->photorequest()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.PhotoRequest
 * @package Synology\Services\Foto
 */
class PhotoRequest extends BaseService
{
    public const API_SERVICE_NAME = 'Foto.PhotoRequest';
    public const API_VERSION = 5;

    /**
     * Summary of list
     *
     * API method: SYNO.Foto.PhotoRequest list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.PhotoRequest-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function list(int $offset = 0, int $limit = 10)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
