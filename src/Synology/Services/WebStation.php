<?php

namespace Synology\Services;

/**
 * Class WebStation - created automatically by ServiceGenerator
 *
 * API: SYNO.WebStation
 * ```
 * $result = $syno->webstation()->getStatus();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation
 * @package Synology\Services
 */
class WebStation extends BaseService
{
    public const API_SERVICE_NAME = 'WebStation';
    public const API_VERSION = 1;
    protected ?WebStation\Backup $backupSvc = null;
    protected ?WebStation\DefaultSvc $defaultSvc = null;
    protected ?WebStation\ErrorPage $errorpageSvc = null;
    protected ?WebStation\HTTP $httpSvc = null;
    protected ?WebStation\PHP $phpSvc = null;
    protected ?WebStation\Package $packageSvc = null;
    protected ?WebStation\Python $pythonSvc = null;
    protected ?WebStation\ScriptLanguage $scriptlanguageSvc = null;
    protected ?WebStation\Shortcut $shortcutSvc = null;
    protected ?WebStation\Task $taskSvc = null;
    protected ?WebStation\WebService $webserviceSvc = null;

    /**
     * Summary of backup
     *
     * API: SYNO.WebStation.Backup
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Backup
     * @return WebStation\Backup
     */
    public function backup()
    {
        $this->backupSvc ??= new WebStation\Backup($this->client);
        return $this->backupSvc;
    }

    /**
     * Summary of default
     *
     * API: SYNO.WebStation.Default
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Default
     * @return WebStation\DefaultSvc
     */
    public function default()
    {
        $this->defaultSvc ??= new WebStation\DefaultSvc($this->client);
        return $this->defaultSvc;
    }

    /**
     * Summary of errorpage
     *
     * API: SYNO.WebStation.ErrorPage
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.ErrorPage
     * @return WebStation\ErrorPage
     */
    public function errorpage()
    {
        $this->errorpageSvc ??= new WebStation\ErrorPage($this->client);
        return $this->errorpageSvc;
    }

    /**
     * Summary of http
     *
     * API: SYNO.WebStation.HTTP
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.HTTP
     * @return WebStation\HTTP
     */
    public function http()
    {
        $this->httpSvc ??= new WebStation\HTTP($this->client);
        return $this->httpSvc;
    }

    /**
     * Summary of php
     *
     * API: SYNO.WebStation.PHP
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.PHP
     * @return WebStation\PHP
     */
    public function php()
    {
        $this->phpSvc ??= new WebStation\PHP($this->client);
        return $this->phpSvc;
    }

    /**
     * Summary of package
     *
     * API: SYNO.WebStation.Package
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Package
     * @return WebStation\Package
     */
    public function package()
    {
        $this->packageSvc ??= new WebStation\Package($this->client);
        return $this->packageSvc;
    }

    /**
     * Summary of python
     *
     * API: SYNO.WebStation.Python
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Python
     * @return WebStation\Python
     */
    public function python()
    {
        $this->pythonSvc ??= new WebStation\Python($this->client);
        return $this->pythonSvc;
    }

    /**
     * Summary of scriptlanguage
     *
     * API: SYNO.WebStation.ScriptLanguage
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.ScriptLanguage
     * @return WebStation\ScriptLanguage
     */
    public function scriptlanguage()
    {
        $this->scriptlanguageSvc ??= new WebStation\ScriptLanguage($this->client);
        return $this->scriptlanguageSvc;
    }

    /**
     * Summary of shortcut
     *
     * API: SYNO.WebStation.Shortcut
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Shortcut
     * @return WebStation\Shortcut
     */
    public function shortcut()
    {
        $this->shortcutSvc ??= new WebStation\Shortcut($this->client);
        return $this->shortcutSvc;
    }

    /**
     * Summary of task
     *
     * API: SYNO.WebStation.Task
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.Task
     * @return WebStation\Task
     */
    public function task()
    {
        $this->taskSvc ??= new WebStation\Task($this->client);
        return $this->taskSvc;
    }

    /**
     * Summary of webservice
     *
     * API: SYNO.WebStation.WebService
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation#/WebStation.WebService
     * @return WebStation\WebService
     */
    public function webservice()
    {
        $this->webserviceSvc ??= new WebStation\WebService($this->client);
        return $this->webserviceSvc;
    }

    /**
     * Summary of getStatus
     *
     * API method: SYNO.WebStation.Status get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.WebStation.Status-get.json
     * @return array<mixed>|bool|string|\stdClass
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
}
