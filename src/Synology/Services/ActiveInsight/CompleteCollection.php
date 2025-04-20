<?php

namespace Synology\Services\ActiveInsight;

use Synology\Services\BaseService;

/**
 * Class CompleteCollection - created automatically by ServiceGenerator
 *
 * API: SYNO.ActiveInsight.CompleteCollection
 * ```
 * $result = $syno->activeinsight()->completecollection()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ActiveInsight#/ActiveInsight.CompleteCollection
 * @package Synology\Services\ActiveInsight
 */
class CompleteCollection extends BaseService
{
    public const API_SERVICE_NAME = 'ActiveInsight.CompleteCollection';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.ActiveInsight.CompleteCollection get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ActiveInsight.CompleteCollection-get.json
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
