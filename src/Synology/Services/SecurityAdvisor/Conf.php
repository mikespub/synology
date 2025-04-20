<?php

namespace Synology\Services\SecurityAdvisor;

use Synology\Services\BaseService;

/**
 * Class Conf - created automatically by ServiceGenerator
 *
 * API: SYNO.SecurityAdvisor.Conf
 * ```
 * $result = $syno->securityadvisor()->conf()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecurityAdvisor#/SecurityAdvisor.Conf
 * @package Synology\Services\SecurityAdvisor
 */
class Conf extends BaseService
{
    public const API_SERVICE_NAME = 'SecurityAdvisor.Conf';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.SecurityAdvisor.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SecurityAdvisor.Conf-get.json
     * @return array<mixed>|bool|string|\stdClass
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
