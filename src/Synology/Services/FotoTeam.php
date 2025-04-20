<?php

namespace Synology\Services;

/**
 * Class FotoTeam - created automatically by ServiceGenerator
 *
 * API: SYNO.FotoTeam
 * ```
 * $result = $syno->fototeam()->browse()->listFolder();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam
 * @package Synology\Services
 */
class FotoTeam extends BaseService
{
    public const API_SERVICE_NAME = 'FotoTeam';
    public const API_VERSION = 2;
    protected ?FotoTeam\Browse $browseSvc = null;
    protected ?FotoTeam\Index $indexSvc = null;
    protected ?FotoTeam\Search $searchSvc = null;

    /**
     * Summary of browse
     *
     * API: SYNO.FotoTeam.Browse
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam#/FotoTeam.Browse
     * @return FotoTeam\Browse
     */
    public function browse()
    {
        $this->browseSvc ??= new FotoTeam\Browse($this->client);
        return $this->browseSvc;
    }

    /**
     * Summary of index
     *
     * API: SYNO.FotoTeam.Index
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam#/FotoTeam.Index
     * @return FotoTeam\Index
     */
    public function index()
    {
        $this->indexSvc ??= new FotoTeam\Index($this->client);
        return $this->indexSvc;
    }

    /**
     * Summary of search
     *
     * API: SYNO.FotoTeam.Search
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam#/FotoTeam.Search
     * @return FotoTeam\Search
     */
    public function search()
    {
        $this->searchSvc ??= new FotoTeam\Search($this->client);
        return $this->searchSvc;
    }
}
