<?php

namespace Synology\Services;

/**
 * Class Office - created automatically by ServiceGenerator
 *
 * API: SYNO.Office
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office
 * @package Synology\Services
 */
class Office extends BaseService
{
    public const API_SERVICE_NAME = 'Office';
    public const API_VERSION = 1;

    /**
     * Summary of listDictionary
     *
     * API method: SYNO.Office.Dictionary list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Dictionary-list.json
     * @return array|bool|string|\stdClass
     */
    public function listDictionary()
    {
        $api = 'Dictionary';
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
     * API method: SYNO.Office.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfoConstants
     *
     * API method: SYNO.Office.Info.Constants get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Info.Constants-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfoConstants()
    {
        $api = 'Info.Constants';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listLocale
     *
     * API method: SYNO.Office.Locale list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Locale-list.json
     * @return array|bool|string|\stdClass
     */
    public function listLocale()
    {
        $api = 'Locale';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSetting
     *
     * API method: SYNO.Office.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Setting-get.json
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

    /**
     * Summary of listSettingFont
     *
     * API method: SYNO.Office.Setting.Font list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Setting.Font-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSettingFont()
    {
        $api = 'Setting.Font';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingSystem
     *
     * API method: SYNO.Office.Setting.System get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Setting.System-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingSystem()
    {
        $api = 'Setting.System';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getShard
     *
     * API method: SYNO.Office.Shard get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard-get.json
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
     * Summary of getShardInfo
     *
     * API method: SYNO.Office.Shard.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getShardInfo()
    {
        $api = 'Shard.Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getShardSession
     *
     * API method: SYNO.Office.Shard.Session get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard.Session-get.json
     * @return array|bool|string|\stdClass
     */
    public function getShardSession()
    {
        $api = 'Shard.Session';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getShardToken
     *
     * API method: SYNO.Office.Shard.Token get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Shard.Token-get.json
     * @return array|bool|string|\stdClass
     */
    public function getShardToken()
    {
        $api = 'Shard.Token';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSheetMruFc
     *
     * API method: SYNO.Office.Sheet.MruFc list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Sheet.MruFc-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSheetMruFc()
    {
        $api = 'Sheet.MruFc';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTemplate
     *
     * API method: SYNO.Office.Template list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Template-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTemplate()
    {
        $api = 'Template';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTemplateSharingGroup
     *
     * API method: SYNO.Office.Template.Sharing.Group list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Office.Template.Sharing.Group-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTemplateSharingGroup()
    {
        $api = 'Template.Sharing.Group';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
