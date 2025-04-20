<?php

namespace Synology\Services;

/**
 * Class ActiveInsight - created automatically by ServiceGenerator
 *
 * API: SYNO.ActiveInsight
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ActiveInsight
 * @package Synology\Services
 */
class ActiveInsight extends BaseService
{
    public const API_SERVICE_NAME = 'ActiveInsight';
    public const API_VERSION = 1;

    /**
     * Summary of getCompleteCollection
     *
     * API method: SYNO.ActiveInsight.CompleteCollection get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ActiveInsight.CompleteCollection-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCompleteCollection()
    {
        $api = 'CompleteCollection';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getRelationManager
     *
     * API method: SYNO.ActiveInsight.RelationManager get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ActiveInsight.RelationManager-get.json
     * @return array|bool|string|\stdClass
     */
    public function getRelationManager()
    {
        $api = 'RelationManager';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSetting
     *
     * API method: SYNO.ActiveInsight.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.ActiveInsight.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSetting()
    {
        $api = 'Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
