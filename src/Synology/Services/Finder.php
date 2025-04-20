<?php

namespace Synology\Services;

/**
 * Class Finder - created automatically by ServiceGenerator
 *
 * API: SYNO.Finder
 * ```
 * $result = $syno->finder()->bookmark()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder
 * @package Synology\Services
 */
class Finder extends BaseService
{
    public const API_SERVICE_NAME = 'Finder';
    public const API_VERSION = 1;
    protected ?Finder\Bookmark $bookmarkSvc = null;
    protected ?Finder\Elastic $elasticSvc = null;
    protected ?Finder\FileIndexing $fileindexingSvc = null;
    protected ?Finder\Preference $preferenceSvc = null;
    protected ?Finder\Settings $settingsSvc = null;

    /**
     * Summary of bookmark
     *
     * API: SYNO.Finder.Bookmark
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.Bookmark
     * @return Finder\Bookmark
     */
    public function bookmark()
    {
        $this->bookmarkSvc ??= new Finder\Bookmark($this->client);
        return $this->bookmarkSvc;
    }

    /**
     * Summary of elastic
     *
     * API: SYNO.Finder.Elastic
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.Elastic
     * @return Finder\Elastic
     */
    public function elastic()
    {
        $this->elasticSvc ??= new Finder\Elastic($this->client);
        return $this->elasticSvc;
    }

    /**
     * Summary of fileindexing
     *
     * API: SYNO.Finder.FileIndexing
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.FileIndexing
     * @return Finder\FileIndexing
     */
    public function fileindexing()
    {
        $this->fileindexingSvc ??= new Finder\FileIndexing($this->client);
        return $this->fileindexingSvc;
    }

    /**
     * Summary of preference
     *
     * API: SYNO.Finder.Preference
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.Preference
     * @return Finder\Preference
     */
    public function preference()
    {
        $this->preferenceSvc ??= new Finder\Preference($this->client);
        return $this->preferenceSvc;
    }

    /**
     * Summary of settings
     *
     * API: SYNO.Finder.Settings
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder#/Finder.Settings
     * @return Finder\Settings
     */
    public function settings()
    {
        $this->settingsSvc ??= new Finder\Settings($this->client);
        return $this->settingsSvc;
    }
}
