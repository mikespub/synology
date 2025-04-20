<?php

namespace Synology\Services;

/**
 * Class AudioStation - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation
 * @package Synology\Services
 */
class AudioStation extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation';
    public const API_VERSION = 3;

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
     * Summary of listFolder
     *
     * API method: SYNO.AudioStation.Folder list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Folder-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFolder()
    {
        $api = 'Folder';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listGenre
     *
     * API method: SYNO.AudioStation.Genre list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Genre-list.json
     * @return array|bool|string|\stdClass
     */
    public function listGenre()
    {
        $api = 'Genre';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
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
     * Summary of listPlaylist
     *
     * API method: SYNO.AudioStation.Playlist list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Playlist-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPlaylist()
    {
        $api = 'Playlist';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRadio
     *
     * API method: SYNO.AudioStation.Radio list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Radio-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRadio()
    {
        $api = 'Radio';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRemotePlayer
     *
     * API method: SYNO.AudioStation.RemotePlayer list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.RemotePlayer-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRemotePlayer()
    {
        $api = 'RemotePlayer';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getinfoRemotePlayer
     *
     * API method: SYNO.AudioStation.RemotePlayer getinfo (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.RemotePlayer-getinfo.json
     * @return array|bool|string|\stdClass
     */
    public function getinfoRemotePlayer()
    {
        $api = 'RemotePlayer';
        $path = 'entry.cgi';
        $method = 'getinfo';
        $version = 3;
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

    /**
     * Summary of listSong
     *
     * API method: SYNO.AudioStation.Song list (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Song-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSong()
    {
        $api = 'Song';
        $path = 'entry.cgi';
        $method = 'list';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPin
     *
     * API method: SYNO.AudioStation.Pin list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.Pin-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPin()
    {
        $api = 'Pin';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVoiceAssistantChallenge
     *
     * API method: SYNO.AudioStation.VoiceAssistant.Challenge get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.VoiceAssistant.Challenge-get.json
     * @return array|bool|string|\stdClass
     */
    public function getVoiceAssistantChallenge()
    {
        $api = 'VoiceAssistant.Challenge';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVoiceAssistantInfo
     *
     * API method: SYNO.AudioStation.VoiceAssistant.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.VoiceAssistant.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getVoiceAssistantInfo()
    {
        $api = 'VoiceAssistant.Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
