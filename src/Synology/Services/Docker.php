<?php

namespace Synology\Services;

/**
 * Class Docker - created automatically by ServiceGenerator
 *
 * API: SYNO.Docker
 * ```
 * $result = $syno->docker()->container()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker
 * @package Synology\Services
 */
class Docker extends BaseService
{
    public const API_SERVICE_NAME = 'Docker';
    public const API_VERSION = 1;
    protected ?Docker\Container $containerSvc = null;
    protected ?Docker\Image $imageSvc = null;
    protected ?Docker\Network $networkSvc = null;
    protected ?Docker\Project $projectSvc = null;

    /**
     * Summary of container
     *
     * API: SYNO.Docker.Container
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Container
     * @return Docker\Container
     */
    public function container()
    {
        $this->containerSvc ??= new Docker\Container($this->client);
        return $this->containerSvc;
    }

    /**
     * Summary of image
     *
     * API: SYNO.Docker.Image
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Image
     * @return Docker\Image
     */
    public function image()
    {
        $this->imageSvc ??= new Docker\Image($this->client);
        return $this->imageSvc;
    }

    /**
     * Summary of network
     *
     * API: SYNO.Docker.Network
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Network
     * @return Docker\Network
     */
    public function network()
    {
        $this->networkSvc ??= new Docker\Network($this->client);
        return $this->networkSvc;
    }

    /**
     * Summary of project
     *
     * API: SYNO.Docker.Project
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker#/Docker.Project
     * @return Docker\Project
     */
    public function project()
    {
        $this->projectSvc ??= new Docker\Project($this->client);
        return $this->projectSvc;
    }
}
