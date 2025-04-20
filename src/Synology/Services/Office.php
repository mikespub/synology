<?php

namespace Synology\Services;

/**
 * Class Office - created automatically by ServiceGenerator
 *
 * API: SYNO.Office
 * ```
 * $result = $syno->office()->dictionary()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office
 * @package Synology\Services
 */
class Office extends BaseService
{
    public const API_SERVICE_NAME = 'Office';
    public const API_VERSION = 1;
    protected ?Office\Dictionary $dictionarySvc = null;
    protected ?Office\Info $infoSvc = null;
    protected ?Office\Locale $localeSvc = null;
    protected ?Office\Setting $settingSvc = null;
    protected ?Office\Shard $shardSvc = null;
    protected ?Office\Sheet $sheetSvc = null;
    protected ?Office\Template $templateSvc = null;

    /**
     * Summary of dictionary
     *
     * API: SYNO.Office.Dictionary
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Dictionary
     * @return Office\Dictionary
     */
    public function dictionary()
    {
        $this->dictionarySvc ??= new Office\Dictionary($this->client);
        return $this->dictionarySvc;
    }

    /**
     * Summary of info
     *
     * API: SYNO.Office.Info
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Info
     * @return Office\Info
     */
    public function info()
    {
        $this->infoSvc ??= new Office\Info($this->client);
        return $this->infoSvc;
    }

    /**
     * Summary of locale
     *
     * API: SYNO.Office.Locale
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Locale
     * @return Office\Locale
     */
    public function locale()
    {
        $this->localeSvc ??= new Office\Locale($this->client);
        return $this->localeSvc;
    }

    /**
     * Summary of setting
     *
     * API: SYNO.Office.Setting
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Setting
     * @return Office\Setting
     */
    public function setting()
    {
        $this->settingSvc ??= new Office\Setting($this->client);
        return $this->settingSvc;
    }

    /**
     * Summary of shard
     *
     * API: SYNO.Office.Shard
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Shard
     * @return Office\Shard
     */
    public function shard()
    {
        $this->shardSvc ??= new Office\Shard($this->client);
        return $this->shardSvc;
    }

    /**
     * Summary of sheet
     *
     * API: SYNO.Office.Sheet
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Sheet
     * @return Office\Sheet
     */
    public function sheet()
    {
        $this->sheetSvc ??= new Office\Sheet($this->client);
        return $this->sheetSvc;
    }

    /**
     * Summary of template
     *
     * API: SYNO.Office.Template
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office#/Office.Template
     * @return Office\Template
     */
    public function template()
    {
        $this->templateSvc ??= new Office\Template($this->client);
        return $this->templateSvc;
    }
}
