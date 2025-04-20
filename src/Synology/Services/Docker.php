<?php

namespace Synology\Services;

/**
 * Class Docker - created automatically by ServiceGenerator
 *
 * API: SYNO.Docker
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker
 * @package Synology\Services
 */
class Docker extends BaseService
{
    public const API_SERVICE_NAME = 'Docker';
    public const API_VERSION = 1;

    /**
     * Summary of listContainer
     *
     * API method: SYNO.Docker.Container list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Container-list.json
     * @return array|bool|string|\stdClass
     */
    public function listContainer(int $offset = 0, int $limit = 10)
    {
        $api = 'Container';
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

    /**
     * Summary of getContainerResource
     *
     * API method: SYNO.Docker.Container.Resource get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Container.Resource-get.json
     * @return array|bool|string|\stdClass
     */
    public function getContainerResource()
    {
        $api = 'Container.Resource';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listImage
     *
     * API method: SYNO.Docker.Image list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Image-list.json
     * @return array|bool|string|\stdClass
     */
    public function listImage(int $offset = 0, int $limit = 10)
    {
        $api = 'Image';
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

    /**
     * Summary of listNetwork
     *
     * API method: SYNO.Docker.Network list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Network-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNetwork()
    {
        $api = 'Network';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProject
     *
     * API method: SYNO.Docker.Project list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Docker.Project-list.json
     * @return array|bool|string|\stdClass
     */
    public function listProject()
    {
        $api = 'Project';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
