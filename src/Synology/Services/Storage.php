<?php

namespace Synology\Services;

/**
 * Class Storage - created automatically by ServiceGenerator
 *
 * API: SYNO.Storage
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Storage
 * @package Synology\Services
 */
class Storage extends BaseService
{
    public const API_SERVICE_NAME = 'Storage';
    public const API_VERSION = 1;

    /**
     * Summary of getCGIHddMan
     *
     * API method: SYNO.Storage.CGI.HddMan get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.HddMan-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCGIHddMan()
    {
        $api = 'CGI.HddMan';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getCGIKMIP
     *
     * API method: SYNO.Storage.CGI.KMIP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.KMIP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCGIKMIP()
    {
        $api = 'CGI.KMIP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listCGISmartScheduler
     *
     * API method: SYNO.Storage.CGI.Smart.Scheduler list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.Smart.Scheduler-list.json
     * @return array|bool|string|\stdClass
     */
    public function listCGISmartScheduler()
    {
        $api = 'CGI.Smart.Scheduler';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listCGISpare
     *
     * API method: SYNO.Storage.CGI.Spare list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.Spare-list.json
     * @return array|bool|string|\stdClass
     */
    public function listCGISpare()
    {
        $api = 'CGI.Spare';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getCGISpareConf
     *
     * API method: SYNO.Storage.CGI.Spare.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Storage.CGI.Spare.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCGISpareConf()
    {
        $api = 'CGI.Spare.Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
