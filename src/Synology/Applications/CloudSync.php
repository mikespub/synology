<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class CloudSync
 *
 * ```
 * $synology = new Synology\Applications\CloudSync($api_host, $api_port, $api_http, 1);
 * $synology->connect($api_user, $api_pass);
 * $connections = $synology->listConnections();
 * foreach ($connections->conn as $conn) {
 *     $sessions = $synology->listSessions($conn->id);
 *     foreach ($sessions->sess as $sess) {
 *         $config = $synology->getSyncConfig($sess->sess_id);
 *         $folders = $synology->getFolderList($sess->sess_id, $sess->remote_folder_id);
 *     }
 * }
 * ```
 *
 * @package Synology\Applications
 */
class CloudSync extends Authenticate
{
    public const API_SERVICE_NAME = 'CloudSync';
    public const API_VERSION = 1;

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($address, $port = null, $protocol = null, $version = self::API_VERSION, $verifySSL = false)
    {
        parent::__construct(static::API_SERVICE_NAME, static::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * List Connections
     *
     * @param int    $limit
     * @param int    $offset
     *
     * @return array
     */
    public function listConnections($limit = 25, $offset = 0)
    {
        $type = '';
        $path = static::API_PATH;
        $method = 'list_conn';
        $params = [
            'limit' => $limit,
            'offset' => $offset,
        ];
        $version = static::API_VERSION;

        return $this->request($type, $path, $method, $params, $version);
    }

    /**
     * List Sessions for a Connection
     *
     * @param int    $connectionId
     * @param int    $limit
     * @param int    $offset
     *
     * @return array
     */
    public function listSessions($connectionId, $limit = 25, $offset = 0)
    {
        $type = '';
        $path = static::API_PATH;
        $method = 'list_sess';
        $params = [
            'connection_id' => $connectionId,
            'limit' => $limit,
            'offset' => $offset,
        ];
        $version = static::API_VERSION;

        return $this->request($type, $path, $method, $params, $version);
    }

    /**
     * Get Sync Config for a Session
     *
     * @param int    $sessionId
     *
     * @return \stdClass
     */
    public function getSyncConfig($sessionId)
    {
        $type = '';
        $path = static::API_PATH;
        $method = 'get_selective_sync_config';
        $params = [
            'session_id' => $sessionId,
        ];
        $version = static::API_VERSION;

        return $this->request($type, $path, $method, $params, $version);
    }

    /**
     * Get Folder List for a Session and Folder
     *
     * @param int    $sessionId
     * @param string $folderId
     *
     * @return array
     */
    public function getFolderList($sessionId, $folderId)
    {
        $type = '';
        $path = static::API_PATH;
        $method = 'get_selective_folder_list';
        $params = [
            'session_id' => $sessionId,
            'file_id' => $folderId,
            'action' => 'get_selective_folder_list',
            'path' => '/',
            'exists_type' => 'null',
        ];
        $version = static::API_VERSION;

        return $this->request($type, $path, $method, $params, $version, 'post');
    }
}
