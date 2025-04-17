<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class SynologyDriveServer
 *
 * @package Synology\Applications
 */
class SynologyDriveServer extends Authenticate
{
    public const API_SERVICE_NAME = 'SynologyDrive';

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version
     * @param bool    $verifySSL
     */
    public function __construct($address, $port = null, $protocol = null, $version = 1, $verifySSL = false)
    {
        parent::__construct(self::API_SERVICE_NAME, self::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * Return information of Connection
     *
     * @param string $sort_by
     * @param string $sort_direction
     * @param integer $offset
     * @param integer $limit
     * @return object
     */
    public function getConnection($sort_by = 'login_time', $sort_direction = 'DESC', $offset = 0, $limit = 50)
    {
        return $this->_request('Connection', static::API_PATH, 'list', [
            'sort_by' => $sort_by,
            'sort_direction' => $sort_direction,
            'offset' => $offset,
            'limit' => $limit,
        ]);
    }

    /**
     * Return information of Share Folder
     *
     * @param string $sort_by
     * @param string $sort_direction
     * @param integer $offset
     * @param integer $limit
     * @return object
     */
    public function getShare($sort_by = 'share_name', $sort_direction = 'ASC', $offset = 0, $limit = 50)
    {
        return $this->_request('Share', static::API_PATH, 'list', [
            'sort_by' => $sort_by,
            'sort_direction' => $sort_direction,
            'action' => 'list',
            'offset' => $offset,
            'limit' => $limit,
        ]);
    }

    /**
     * Return information of ServerLog
     *
     * @param integer $offset
     * @param integer $limit
     * @param string $keyword
     * @param string $datefrom
     * @param string $dateto
     * @param string $logtype
     * @param string $ipaddress
     * @return object
     */
    public function getLog($offset = 0, $limit = 100, $keyword = '', $datefrom = '', $dateto = '', $logtype = '[]', $ipaddress = '')
    {
        return $this->_request('Log', static::API_PATH, 'list', [
            'target' => 'user',
            'share_type' => 'all',
            'offset' => $offset,
            'limit' => $limit,
            'get_all' => 'false',
            'keyword' => $keyword,
            'datefrom' => $datefrom,
            'dateto' => $dateto,
            'log_type' => $logtype,
            'username' => '',
            'username_include_system' => 'false',
            'ipaddress' => $ipaddress,
        ]);
    }
}
