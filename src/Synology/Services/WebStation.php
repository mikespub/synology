<?php

namespace Synology\Services;

/**
 * Class WebStation - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation
 * @package Synology\Services
 */
class WebStation extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation';
    public const API_VERSION = 1;

    /**
     * Summary of listBackup
     *
     * API method: SYNO.WebStation.Backup list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Backup-list.json
     * @return array|bool|string|\stdClass
     */
    public function listBackup()
    {
        $api = 'Backup';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDefault
     *
     * API method: SYNO.WebStation.Default get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Default-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDefault()
    {
        $api = 'Default';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listErrorPage
     *
     * API method: SYNO.WebStation.ErrorPage list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.ErrorPage-list.json
     * @return array|bool|string|\stdClass
     */
    public function listErrorPage()
    {
        $api = 'ErrorPage';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listHTTPVHost
     *
     * API method: SYNO.WebStation.HTTP.VHost list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.HTTP.VHost-list.json
     * @return array|bool|string|\stdClass
     */
    public function listHTTPVHost()
    {
        $api = 'HTTP.VHost';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPHP
     *
     * API method: SYNO.WebStation.PHP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.PHP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPHP()
    {
        $api = 'PHP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPHPProfile
     *
     * API method: SYNO.WebStation.PHP.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.PHP.Profile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPHPProfile()
    {
        $api = 'PHP.Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPackage
     *
     * API method: SYNO.WebStation.Package list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Package-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPackage()
    {
        $api = 'Package';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPython
     *
     * API method: SYNO.WebStation.Python get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Python-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPython()
    {
        $api = 'Python';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPythonProfile
     *
     * API method: SYNO.WebStation.Python.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Python.Profile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPythonProfile()
    {
        $api = 'Python.Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listScriptLanguage
     *
     * API method: SYNO.WebStation.ScriptLanguage list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.ScriptLanguage-list.json
     * @return array|bool|string|\stdClass
     */
    public function listScriptLanguage()
    {
        $api = 'ScriptLanguage';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getScriptLanguageUtils
     *
     * API method: SYNO.WebStation.ScriptLanguage.Utils get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.ScriptLanguage.Utils-get.json
     * @return array|bool|string|\stdClass
     */
    public function getScriptLanguageUtils()
    {
        $api = 'ScriptLanguage.Utils';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listShortcut
     *
     * API method: SYNO.WebStation.Shortcut list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Shortcut-list.json
     * @return array|bool|string|\stdClass
     */
    public function listShortcut()
    {
        $api = 'Shortcut';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getStatus
     *
     * API method: SYNO.WebStation.Status get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Status-get.json
     * @return array|bool|string|\stdClass
     */
    public function getStatus()
    {
        $api = 'Status';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTask
     *
     * API method: SYNO.WebStation.Task list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Task-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTask()
    {
        $api = 'Task';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listWebServicePortal
     *
     * API method: SYNO.WebStation.WebService.Portal list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.WebService.Portal-list.json
     * @return array|bool|string|\stdClass
     */
    public function listWebServicePortal()
    {
        $api = 'WebService.Portal';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listWebServiceService
     *
     * API method: SYNO.WebStation.WebService.Service list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.WebService.Service-list.json
     * @return array|bool|string|\stdClass
     */
    public function listWebServiceService()
    {
        $api = 'WebService.Service';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
