<?php

namespace Synology\Services\Office;

use Synology\Services\BaseService;

/**
 * Class Template - created automatically by ServiceGenerator
 *
 * API: SYNO.Office.Template
 * ```
 * $result = $syno->office()->template()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Template
 * @package Synology\Services\Office
 */
class Template extends BaseService
{
    public const API_SERVICE_NAME = 'Office.Template';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.Office.Template list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Template-list.json
     * @return array<mixed>|bool|string|\stdClass
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
     * Summary of listSharingGroup
     *
     * API method: SYNO.Office.Template.Sharing.Group list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Template.Sharing.Group-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listSharingGroup()
    {
        $api = 'Sharing.Group';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
