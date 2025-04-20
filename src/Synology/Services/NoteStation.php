<?php

namespace Synology\Services;

/**
 * Class NoteStation - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation
 * @package Synology\Services
 */
class NoteStation extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation';
    public const API_VERSION = 3;

    /**
     * Summary of getInfo
     *
     * API method: SYNO.NoteStation.Info get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNote
     *
     * API method: SYNO.NoteStation.Note list (4)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Note-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNote()
    {
        $api = 'Note';
        $path = static::API_PATH;
        $method = 'list';
        $version = 4;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNotebook
     *
     * API method: SYNO.NoteStation.Notebook list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Notebook-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNotebook()
    {
        $api = 'Notebook';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSetting
     *
     * API method: SYNO.NoteStation.Setting get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Setting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSetting()
    {
        $api = 'Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingDSM
     *
     * API method: SYNO.NoteStation.Setting.DSM get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Setting.DSM-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingDSM()
    {
        $api = 'Setting.DSM';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSettingGlobal
     *
     * API method: SYNO.NoteStation.Setting.Global get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Setting.Global-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSettingGlobal()
    {
        $api = 'Setting.Global';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSharePriv
     *
     * API method: SYNO.NoteStation.Share.Priv list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Share.Priv-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSharePriv()
    {
        $api = 'Share.Priv';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listShortcut
     *
     * API method: SYNO.NoteStation.Shortcut list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Shortcut-list.json
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
     * Summary of listSmart
     *
     * API method: SYNO.NoteStation.Smart list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Smart-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSmart()
    {
        $api = 'Smart';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTag
     *
     * API method: SYNO.NoteStation.Tag list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Tag-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTag()
    {
        $api = 'Tag';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listTodo
     *
     * API method: SYNO.NoteStation.Todo list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.NoteStation.Todo-list.json
     * @return array|bool|string|\stdClass
     */
    public function listTodo()
    {
        $api = 'Todo';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
