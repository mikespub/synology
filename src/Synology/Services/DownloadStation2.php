<?php

namespace Synology\Services;

/**
 * Class DownloadStation2 - created automatically by ServiceGenerator
 *
 * API: SYNO.DownloadStation2
 * ```
 * $result = $syno->downloadstation2()->captcha()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2
 * @package Synology\Services
 */
class DownloadStation2 extends BaseService
{
    public const API_SERVICE_NAME = 'DownloadStation2';
    public const API_VERSION = 2;
    protected ?DownloadStation2\Captcha $captchaSvc = null;
    protected ?DownloadStation2\Package $packageSvc = null;
    protected ?DownloadStation2\RSS $rssSvc = null;
    protected ?DownloadStation2\Settings $settingsSvc = null;
    protected ?DownloadStation2\Task $taskSvc = null;

    /**
     * Summary of captcha
     *
     * API: SYNO.DownloadStation2.Captcha
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Captcha
     * @return DownloadStation2\Captcha
     */
    public function captcha()
    {
        $this->captchaSvc ??= new DownloadStation2\Captcha($this->client);
        return $this->captchaSvc;
    }

    /**
     * Summary of package
     *
     * API: SYNO.DownloadStation2.Package
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Package
     * @return DownloadStation2\Package
     */
    public function package()
    {
        $this->packageSvc ??= new DownloadStation2\Package($this->client);
        return $this->packageSvc;
    }

    /**
     * Summary of rss
     *
     * API: SYNO.DownloadStation2.RSS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.RSS
     * @return DownloadStation2\RSS
     */
    public function rss()
    {
        $this->rssSvc ??= new DownloadStation2\RSS($this->client);
        return $this->rssSvc;
    }

    /**
     * Summary of settings
     *
     * API: SYNO.DownloadStation2.Settings
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Settings
     * @return DownloadStation2\Settings
     */
    public function settings()
    {
        $this->settingsSvc ??= new DownloadStation2\Settings($this->client);
        return $this->settingsSvc;
    }

    /**
     * Summary of task
     *
     * API: SYNO.DownloadStation2.Task
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2#/DownloadStation2.Task
     * @return DownloadStation2\Task
     */
    public function task()
    {
        $this->taskSvc ??= new DownloadStation2\Task($this->client);
        return $this->taskSvc;
    }
}
