<?php

namespace Synology\Services;

/**
 * Class ActiveInsight - created automatically by ServiceGenerator
 *
 * API: SYNO.ActiveInsight
 * ```
 * $result = $syno->activeinsight()->getRelationManager();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ActiveInsight
 * @package Synology\Services
 */
class ActiveInsight extends BaseService
{
    public const API_SERVICE_NAME = 'ActiveInsight';
    public const API_VERSION = 1;
    protected ?ActiveInsight\CompleteCollection $completecollectionSvc = null;
    protected ?ActiveInsight\Setting $settingSvc = null;

    /**
     * Summary of completecollection
     *
     * API: SYNO.ActiveInsight.CompleteCollection
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ActiveInsight#/ActiveInsight.CompleteCollection
     * @return ActiveInsight\CompleteCollection
     */
    public function completecollection()
    {
        $this->completecollectionSvc ??= new ActiveInsight\CompleteCollection($this->client);
        return $this->completecollectionSvc;
    }

    /**
     * Summary of setting
     *
     * API: SYNO.ActiveInsight.Setting
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ActiveInsight#/ActiveInsight.Setting
     * @return ActiveInsight\Setting
     */
    public function setting()
    {
        $this->settingSvc ??= new ActiveInsight\Setting($this->client);
        return $this->settingSvc;
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
}
