<?php

namespace Synology\Services;

/**
 * Class SynologyDrive - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive
 * ```
 * $result = $syno->synologydrive()->getDSM();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive
 * @package Synology\Services
 */
class SynologyDrive extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive';
    public const API_VERSION = 1;
    protected ?SynologyDrive\Activation $activationSvc = null;
    protected ?SynologyDrive\AppIntegration $appintegrationSvc = null;
    protected ?SynologyDrive\Config $configSvc = null;
    protected ?SynologyDrive\Connection $connectionSvc = null;
    protected ?SynologyDrive\DBUsage $dbusageSvc = null;
    protected ?SynologyDrive\HybridShare $hybridshareSvc = null;
    protected ?SynologyDrive\Info $infoSvc = null;
    protected ?SynologyDrive\KeyManagement $keymanagementSvc = null;
    protected ?SynologyDrive\Labels $labelsSvc = null;
    protected ?SynologyDrive\Metrics $metricsSvc = null;
    protected ?SynologyDrive\Migration $migrationSvc = null;
    protected ?SynologyDrive\Node $nodeSvc = null;
    protected ?SynologyDrive\Notifications $notificationsSvc = null;
    protected ?SynologyDrive\Privilege $privilegeSvc = null;
    protected ?SynologyDrive\Profiles $profilesSvc = null;
    protected ?SynologyDrive\SCIM $scimSvc = null;
    protected ?SynologyDrive\Settings $settingsSvc = null;
    protected ?SynologyDrive\Shard $shardSvc = null;
    protected ?SynologyDrive\Share $shareSvc = null;
    protected ?SynologyDrive\Tasks $tasksSvc = null;
    protected ?SynologyDrive\TeamFolders $teamfoldersSvc = null;

    /**
     * Summary of activation
     *
     * API: SYNO.SynologyDrive.Activation
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Activation
     * @return SynologyDrive\Activation
     */
    public function activation()
    {
        $this->activationSvc ??= new SynologyDrive\Activation($this->client);
        return $this->activationSvc;
    }

    /**
     * Summary of appintegration
     *
     * API: SYNO.SynologyDrive.AppIntegration
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.AppIntegration
     * @return SynologyDrive\AppIntegration
     */
    public function appintegration()
    {
        $this->appintegrationSvc ??= new SynologyDrive\AppIntegration($this->client);
        return $this->appintegrationSvc;
    }

    /**
     * Summary of config
     *
     * API: SYNO.SynologyDrive.Config
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Config
     * @return SynologyDrive\Config
     */
    public function config()
    {
        $this->configSvc ??= new SynologyDrive\Config($this->client);
        return $this->configSvc;
    }

    /**
     * Summary of connection
     *
     * API: SYNO.SynologyDrive.Connection
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Connection
     * @return SynologyDrive\Connection
     */
    public function connection()
    {
        $this->connectionSvc ??= new SynologyDrive\Connection($this->client);
        return $this->connectionSvc;
    }

    /**
     * Summary of dbusage
     *
     * API: SYNO.SynologyDrive.DBUsage
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.DBUsage
     * @return SynologyDrive\DBUsage
     */
    public function dbusage()
    {
        $this->dbusageSvc ??= new SynologyDrive\DBUsage($this->client);
        return $this->dbusageSvc;
    }

    /**
     * Summary of hybridshare
     *
     * API: SYNO.SynologyDrive.HybridShare
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.HybridShare
     * @return SynologyDrive\HybridShare
     */
    public function hybridshare()
    {
        $this->hybridshareSvc ??= new SynologyDrive\HybridShare($this->client);
        return $this->hybridshareSvc;
    }

    /**
     * Summary of info
     *
     * API: SYNO.SynologyDrive.Info
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Info
     * @return SynologyDrive\Info
     */
    public function info()
    {
        $this->infoSvc ??= new SynologyDrive\Info($this->client);
        return $this->infoSvc;
    }

    /**
     * Summary of keymanagement
     *
     * API: SYNO.SynologyDrive.KeyManagement
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.KeyManagement
     * @return SynologyDrive\KeyManagement
     */
    public function keymanagement()
    {
        $this->keymanagementSvc ??= new SynologyDrive\KeyManagement($this->client);
        return $this->keymanagementSvc;
    }

    /**
     * Summary of labels
     *
     * API: SYNO.SynologyDrive.Labels
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Labels
     * @return SynologyDrive\Labels
     */
    public function labels()
    {
        $this->labelsSvc ??= new SynologyDrive\Labels($this->client);
        return $this->labelsSvc;
    }

    /**
     * Summary of metrics
     *
     * API: SYNO.SynologyDrive.Metrics
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Metrics
     * @return SynologyDrive\Metrics
     */
    public function metrics()
    {
        $this->metricsSvc ??= new SynologyDrive\Metrics($this->client);
        return $this->metricsSvc;
    }

    /**
     * Summary of migration
     *
     * API: SYNO.SynologyDrive.Migration
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Migration
     * @return SynologyDrive\Migration
     */
    public function migration()
    {
        $this->migrationSvc ??= new SynologyDrive\Migration($this->client);
        return $this->migrationSvc;
    }

    /**
     * Summary of node
     *
     * API: SYNO.SynologyDrive.Node
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Node
     * @return SynologyDrive\Node
     */
    public function node()
    {
        $this->nodeSvc ??= new SynologyDrive\Node($this->client);
        return $this->nodeSvc;
    }

    /**
     * Summary of notifications
     *
     * API: SYNO.SynologyDrive.Notifications
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Notifications
     * @return SynologyDrive\Notifications
     */
    public function notifications()
    {
        $this->notificationsSvc ??= new SynologyDrive\Notifications($this->client);
        return $this->notificationsSvc;
    }

    /**
     * Summary of privilege
     *
     * API: SYNO.SynologyDrive.Privilege
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Privilege
     * @return SynologyDrive\Privilege
     */
    public function privilege()
    {
        $this->privilegeSvc ??= new SynologyDrive\Privilege($this->client);
        return $this->privilegeSvc;
    }

    /**
     * Summary of profiles
     *
     * API: SYNO.SynologyDrive.Profiles
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Profiles
     * @return SynologyDrive\Profiles
     */
    public function profiles()
    {
        $this->profilesSvc ??= new SynologyDrive\Profiles($this->client);
        return $this->profilesSvc;
    }

    /**
     * Summary of scim
     *
     * API: SYNO.SynologyDrive.SCIM
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.SCIM
     * @return SynologyDrive\SCIM
     */
    public function scim()
    {
        $this->scimSvc ??= new SynologyDrive\SCIM($this->client);
        return $this->scimSvc;
    }

    /**
     * Summary of settings
     *
     * API: SYNO.SynologyDrive.Settings
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Settings
     * @return SynologyDrive\Settings
     */
    public function settings()
    {
        $this->settingsSvc ??= new SynologyDrive\Settings($this->client);
        return $this->settingsSvc;
    }

    /**
     * Summary of shard
     *
     * API: SYNO.SynologyDrive.Shard
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Shard
     * @return SynologyDrive\Shard
     */
    public function shard()
    {
        $this->shardSvc ??= new SynologyDrive\Shard($this->client);
        return $this->shardSvc;
    }

    /**
     * Summary of share
     *
     * API: SYNO.SynologyDrive.Share
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Share
     * @return SynologyDrive\Share
     */
    public function share()
    {
        $this->shareSvc ??= new SynologyDrive\Share($this->client);
        return $this->shareSvc;
    }

    /**
     * Summary of tasks
     *
     * API: SYNO.SynologyDrive.Tasks
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.Tasks
     * @return SynologyDrive\Tasks
     */
    public function tasks()
    {
        $this->tasksSvc ??= new SynologyDrive\Tasks($this->client);
        return $this->tasksSvc;
    }

    /**
     * Summary of teamfolders
     *
     * API: SYNO.SynologyDrive.TeamFolders
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive#/SynologyDrive.TeamFolders
     * @return SynologyDrive\TeamFolders
     */
    public function teamfolders()
    {
        $this->teamfoldersSvc ??= new SynologyDrive\TeamFolders($this->client);
        return $this->teamfoldersSvc;
    }

    /**
     * Summary of getDSM
     *
     * API method: SYNO.SynologyDrive.DSM get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.DSM-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDSM()
    {
        $api = 'DSM';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getStatistics
     *
     * API method: SYNO.SynologyDrive.Statistics get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Statistics-get.json
     * @return array|bool|string|\stdClass
     */
    public function getStatistics()
    {
        $api = 'Statistics';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
