<?php

namespace Synology\Services;

/**
 * Class SynologyDrive - created automatically by ServiceGenerator
 *
 * API: SYNO.SynologyDrive
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive
 * @package Synology\Services
 */
class SynologyDrive extends BaseService
{
    public const API_SERVICE_NAME = 'SynologyDrive';
    public const API_VERSION = 1;

    /**
     * Summary of getActivation
     *
     * API method: SYNO.SynologyDrive.Activation get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Activation-get.json
     * @return array|bool|string|\stdClass
     */
    public function getActivation()
    {
        $api = 'Activation';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listAppIntegration
     *
     * API method: SYNO.SynologyDrive.AppIntegration list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.AppIntegration-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAppIntegration()
    {
        $api = 'AppIntegration';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getConfig
     *
     * API method: SYNO.SynologyDrive.Config get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Config-get.json
     * @return array|bool|string|\stdClass
     */
    public function getConfig()
    {
        $api = 'Config';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listConnection
     *
     * API method: SYNO.SynologyDrive.Connection list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Connection-list.json
     * @return array|bool|string|\stdClass
     */
    public function listConnection()
    {
        $api = 'Connection';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDBUsage
     *
     * API method: SYNO.SynologyDrive.DBUsage get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.DBUsage-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDBUsage()
    {
        $api = 'DBUsage';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
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
     * Summary of listHybridSharePrivilege
     *
     * API method: SYNO.SynologyDrive.HybridShare.Privilege list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.HybridShare.Privilege-list.json
     * @return array|bool|string|\stdClass
     */
    public function listHybridSharePrivilege()
    {
        $api = 'HybridShare.Privilege';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfo
     *
     * API method: SYNO.SynologyDrive.Info get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listKeyManagement
     *
     * API method: SYNO.SynologyDrive.KeyManagement list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.KeyManagement-list.json
     * @return array|bool|string|\stdClass
     */
    public function listKeyManagement()
    {
        $api = 'KeyManagement';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLabels
     *
     * API method: SYNO.SynologyDrive.Labels list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Labels-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLabels()
    {
        $api = 'Labels';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMetricsToken
     *
     * API method: SYNO.SynologyDrive.Metrics.Token get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Metrics.Token-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMetricsToken()
    {
        $api = 'Metrics.Token';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listMigrationUserHome
     *
     * API method: SYNO.SynologyDrive.Migration.UserHome list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Migration.UserHome-list.json
     * @return array|bool|string|\stdClass
     */
    public function listMigrationUserHome()
    {
        $api = 'Migration.UserHome';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNode
     *
     * API method: SYNO.SynologyDrive.Node list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Node-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNode()
    {
        $api = 'Node';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNotifications
     *
     * API method: SYNO.SynologyDrive.Notifications list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Notifications-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNotifications()
    {
        $api = 'Notifications';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPrivilege
     *
     * API method: SYNO.SynologyDrive.Privilege list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Privilege-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPrivilege()
    {
        $api = 'Privilege';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listProfiles
     *
     * API method: SYNO.SynologyDrive.Profiles list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Profiles-list.json
     * @return array|bool|string|\stdClass
     */
    public function listProfiles()
    {
        $api = 'Profiles';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSCIMPhoto
     *
     * API method: SYNO.SynologyDrive.SCIM.Photo get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.SCIM.Photo-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSCIMPhoto()
    {
        $api = 'SCIM.Photo';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSettings
     *
     * API method: SYNO.SynologyDrive.Settings list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Settings-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSettings()
    {
        $api = 'Settings';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getShard
     *
     * API method: SYNO.SynologyDrive.Shard get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Shard-get.json
     * @return array|bool|string|\stdClass
     */
    public function getShard()
    {
        $api = 'Shard';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listShare
     *
     * API method: SYNO.SynologyDrive.Share list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Share-list.json
     * @return array|bool|string|\stdClass
     */
    public function listShare()
    {
        $api = 'Share';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSharePriv
     *
     * API method: SYNO.SynologyDrive.Share.Priv list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Share.Priv-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSharePriv()
    {
        $api = 'Share.Priv';
        $path = static::API_PATH;
        $method = 'list';
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

    /**
     * Summary of listTasks
     *
     * API method: SYNO.SynologyDrive.Tasks list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.Tasks-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTasks()
    {
        $api = 'Tasks';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTeamFolders
     *
     * API method: SYNO.SynologyDrive.TeamFolders list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.SynologyDrive.TeamFolders-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTeamFolders()
    {
        $api = 'TeamFolders';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
