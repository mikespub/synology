<?php

namespace Synology\Services;

/**
 * Class CloudSync - created automatically by ServiceGenerator
 *
 * API: SYNO.CloudSync
 * ```
 * $result = $syno->cloudsync()->getProperty();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=CloudSync
 * @package Synology\Services
 */
class CloudSync extends BaseService
{
    public const API_SERVICE_NAME = 'CloudSync';
    public const API_VERSION = 1;

    /**
     * Summary of getProperty
     *
     * API method: SYNO.CloudSync get_property (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_property.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getProperty(int $connection_id = 1)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_property';
        $version = 1;
        $params = [
            'connection_id' => $connection_id,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getLog
     *
     * API method: SYNO.CloudSync get_log (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_log.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getLog(int $offset = 0, int $limit = 10)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_log';
        $version = 1;
        $params = [
            'offset' => $offset,
            'limit' => $limit,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getRecentlyChange
     *
     * API method: SYNO.CloudSync get_recently_change (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_recently_change.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getRecentlyChange()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_recently_change';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getConnectionSetting
     *
     * API method: SYNO.CloudSync get_connection_setting (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_connection_setting.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getConnectionSetting(int $connection_id = 1)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_connection_setting';
        $version = 1;
        $params = [
            'connection_id' => $connection_id,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSessionSetting
     *
     * API method: SYNO.CloudSync get_session_setting (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_session_setting.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSessionSetting(int $session_id = 2)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_session_setting';
        $version = 1;
        $params = [
            'session_id' => $session_id,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSelectiveFolderList
     *
     * API method: SYNO.CloudSync get_selective_folder_list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_selective_folder_list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSelectiveFolderList(int $session_id = 2, string $file_id = "FF5A9A59014AF031!41822", string $inPath = "/", ?string $exists_type = null)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_selective_folder_list';
        $version = 1;
        $params = [
            'session_id' => $session_id,
            'file_id' => json_encode($file_id, JSON_UNESCAPED_SLASHES),
            'path' => json_encode($inPath, JSON_UNESCAPED_SLASHES),
            'exists_type' => json_encode($exists_type, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSelectiveSyncConfig
     *
     * API method: SYNO.CloudSync get_selective_sync_config (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_selective_sync_config.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getSelectiveSyncConfig(int $session_id = 2)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_selective_sync_config';
        $version = 1;
        $params = [
            'session_id' => $session_id,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listConn
     *
     * API method: SYNO.CloudSync list_conn (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-list_conn.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listConn(bool $is_tray = true)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list_conn';
        $version = 1;
        $params = [
            'is_tray' => json_encode($is_tray, JSON_UNESCAPED_SLASHES),
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSess
     *
     * API method: SYNO.CloudSync list_sess (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-list_sess.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listSess(int $connection_id = 1)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list_sess';
        $version = 1;
        $params = [
            'connection_id' => $connection_id,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getConnAuthInfo
     *
     * API method: SYNO.CloudSync get_conn_auth_info (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.CloudSync-get_conn_auth_info.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getConnAuthInfo(int $connection_id = 1)
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get_conn_auth_info';
        $version = 1;
        $params = [
            'connection_id' => $connection_id,
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
