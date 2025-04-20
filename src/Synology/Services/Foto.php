<?php

namespace Synology\Services;

/**
 * Class Foto - created automatically by ServiceGenerator
 *
 * API: SYNO.Foto
 * ```
 * $result = $syno->foto()->listFavorite();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto
 * @package Synology\Services
 */
class Foto extends BaseService
{
    public const API_SERVICE_NAME = 'Foto';
    public const API_VERSION = 5;
    protected ?Foto\Browse $browseSvc = null;
    protected ?Foto\Index $indexSvc = null;
    protected ?Foto\PhotoRequest $photorequestSvc = null;
    protected ?Foto\Search $searchSvc = null;
    protected ?Foto\Setting $settingSvc = null;

    /**
     * Summary of browse
     *
     * API: SYNO.Foto.Browse
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Browse
     * @return Foto\Browse
     */
    public function browse()
    {
        $this->browseSvc ??= new Foto\Browse($this->client);
        return $this->browseSvc;
    }

    /**
     * Summary of index
     *
     * API: SYNO.Foto.Index
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Index
     * @return Foto\Index
     */
    public function index()
    {
        $this->indexSvc ??= new Foto\Index($this->client);
        return $this->indexSvc;
    }

    /**
     * Summary of photorequest
     *
     * API: SYNO.Foto.PhotoRequest
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.PhotoRequest
     * @return Foto\PhotoRequest
     */
    public function photorequest()
    {
        $this->photorequestSvc ??= new Foto\PhotoRequest($this->client);
        return $this->photorequestSvc;
    }

    /**
     * Summary of search
     *
     * API: SYNO.Foto.Search
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Search
     * @return Foto\Search
     */
    public function search()
    {
        $this->searchSvc ??= new Foto\Search($this->client);
        return $this->searchSvc;
    }

    /**
     * Summary of setting
     *
     * API: SYNO.Foto.Setting
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto#/Foto.Setting
     * @return Foto\Setting
     */
    public function setting()
    {
        $this->settingSvc ??= new Foto\Setting($this->client);
        return $this->settingSvc;
    }

    /**
     * Summary of listFavorite
     *
     * API method: SYNO.Foto.Favorite list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Foto.Favorite-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listFavorite(int $offset = 0, int $limit = 10)
    {
        $api = 'Favorite';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
