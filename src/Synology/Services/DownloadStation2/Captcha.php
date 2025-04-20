<?php

namespace Synology\Services\DownloadStation2;

use Synology\Services\BaseService;

/**
 * Class Captcha - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation2.Captcha
 * ```
 * $result = $syno->downloadstation2()->captcha()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Captcha
 * @package Synology\Services\DownloadStation2
 */
class Captcha extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation2.Captcha';
    public const API_VERSION = 2;

    /**
     * Summary of list
     *
     * API method: SYNO.DownloadStation2.Captcha list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.DownloadStation2.Captcha-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
