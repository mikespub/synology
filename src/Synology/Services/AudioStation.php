<?php

namespace Synology\Services;

/**
 * Class AudioStation - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation
 * ```
 * $result = $syno->audiostation()->listAlbum();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation
 * @package Synology\Services
 */
class AudioStation extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation';
    public const API_VERSION = 3;
    protected ?AudioStation\Folder $folderSvc = null;
    protected ?AudioStation\Genre $genreSvc = null;
    protected ?AudioStation\Playlist $playlistSvc = null;
    protected ?AudioStation\Radio $radioSvc = null;
    protected ?AudioStation\RemotePlayer $remoteplayerSvc = null;
    protected ?AudioStation\Song $songSvc = null;
    protected ?AudioStation\Pin $pinSvc = null;
    protected ?AudioStation\VoiceAssistant $voiceassistantSvc = null;

    /**
     * Summary of folder
     *
     * API: SYNO.AudioStation.Folder
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Folder
     * @return AudioStation\Folder
     */
    public function folder()
    {
        $this->folderSvc ??= new AudioStation\Folder($this->client);
        return $this->folderSvc;
    }

    /**
     * Summary of genre
     *
     * API: SYNO.AudioStation.Genre
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Genre
     * @return AudioStation\Genre
     */
    public function genre()
    {
        $this->genreSvc ??= new AudioStation\Genre($this->client);
        return $this->genreSvc;
    }

    /**
     * Summary of playlist
     *
     * API: SYNO.AudioStation.Playlist
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Playlist
     * @return AudioStation\Playlist
     */
    public function playlist()
    {
        $this->playlistSvc ??= new AudioStation\Playlist($this->client);
        return $this->playlistSvc;
    }

    /**
     * Summary of radio
     *
     * API: SYNO.AudioStation.Radio
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Radio
     * @return AudioStation\Radio
     */
    public function radio()
    {
        $this->radioSvc ??= new AudioStation\Radio($this->client);
        return $this->radioSvc;
    }

    /**
     * Summary of remoteplayer
     *
     * API: SYNO.AudioStation.RemotePlayer
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.RemotePlayer
     * @return AudioStation\RemotePlayer
     */
    public function remoteplayer()
    {
        $this->remoteplayerSvc ??= new AudioStation\RemotePlayer($this->client);
        return $this->remoteplayerSvc;
    }

    /**
     * Summary of song
     *
     * API: SYNO.AudioStation.Song
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Song
     * @return AudioStation\Song
     */
    public function song()
    {
        $this->songSvc ??= new AudioStation\Song($this->client);
        return $this->songSvc;
    }

    /**
     * Summary of pin
     *
     * API: SYNO.AudioStation.Pin
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.Pin
     * @return AudioStation\Pin
     */
    public function pin()
    {
        $this->pinSvc ??= new AudioStation\Pin($this->client);
        return $this->pinSvc;
    }

    /**
     * Summary of voiceassistant
     *
     * API: SYNO.AudioStation.VoiceAssistant
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.VoiceAssistant
     * @return AudioStation\VoiceAssistant
     */
    public function voiceassistant()
    {
        $this->voiceassistantSvc ??= new AudioStation\VoiceAssistant($this->client);
        return $this->voiceassistantSvc;
    }

    /**
     * Summary of listAlbum
     *
     * API method: SYNO.AudioStation.Album list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Album-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAlbum()
    {
        $api = 'Album';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listArtist
     *
     * API method: SYNO.AudioStation.Artist list (4)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Artist-list.json
     * @return array|bool|string|\stdClass
     */
    public function listArtist()
    {
        $api = 'Artist';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 4;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listComposer
     *
     * API method: SYNO.AudioStation.Composer list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Composer-list.json
     * @return array|bool|string|\stdClass
     */
    public function listComposer()
    {
        $api = 'Composer';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getinfoInfo
     *
     * API method: SYNO.AudioStation.Info getinfo (6)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Info-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoInfo()
    {
        $api = 'Info';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 6;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listMediaServer
     *
     * API method: SYNO.AudioStation.MediaServer list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.MediaServer-list.json
     * @return array|bool|string|\stdClass
     */
    public function listMediaServer()
    {
        $api = 'MediaServer';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSearch
     *
     * API method: SYNO.AudioStation.Search list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Search-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSearch()
    {
        $api = 'Search';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
