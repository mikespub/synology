<?php

namespace Synology\Services\Storage;

use Synology\Services\BaseService;

/**
 * Class CGI - created automatically by ServiceGenerator
 *
 * API: SYNO.Storage.CGI
 * ```
 * $result = $syno->storage()->cgi()->getHddMan();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Storage#/Storage.CGI
 * @package Synology\Services\Storage
 */
class CGI extends BaseService
{
    public const API_SERVICE_NAME = 'Storage.CGI';
    public const API_VERSION = 1;

    /**
     * Summary of getHddMan
     *
     * API method: SYNO.Storage.CGI.HddMan get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.HddMan-get.json
     * @return array|bool|string|\stdClass
     */
    public function getHddMan()
    {
        $api = 'HddMan';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getKMIP
     *
     * API method: SYNO.Storage.CGI.KMIP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.KMIP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getKMIP()
    {
        $api = 'KMIP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSmartScheduler
     *
     * API method: SYNO.Storage.CGI.Smart.Scheduler list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.Smart.Scheduler-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSmartScheduler()
    {
        $api = 'Smart.Scheduler';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSpare
     *
     * API method: SYNO.Storage.CGI.Spare list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.Spare-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSpare()
    {
        $api = 'Spare';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSpareConf
     *
     * API method: SYNO.Storage.CGI.Spare.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.Spare.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSpareConf()
    {
        $api = 'Spare.Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
