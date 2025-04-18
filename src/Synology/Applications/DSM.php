<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class DSM
 *
 * @package Synology\Applications
 * @deprecated 1.5.4 objects moved from DSM to Core in Web API
 */
class DSM extends Authenticate
{
    public const API_SERVICE_NAME = 'DSM';
    public const API_VERSION = 2;

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($address, $port = null, $protocol = null, $version = 1, $verifySSL = false)
    {
        parent::__construct(self::API_SERVICE_NAME, self::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * Return Information about DSM
     * - is_manager
     * - version
     * - version_string
     */
    public function getInfo()
    {
        return $this->request('Info', 'dsm/info.cgi', 'getinfo');
    }

    /**
     * Get a list of objects
     *
     * @param string $type (User|Share|Group|Application|Service|Package|Network|Volume|AutoBlock|LogViewer|Connection|iSCSI)
     * @param int    $limit
     * @param int    $offset
     *
     * @return array
     */
    public function getObjects($type, $limit = 25, $offset = 0)
    {
        $path = '';
        switch ($type) {
            case 'User':
                $path = 'dsm/user.cgi';
                break;
            case 'Share':
                $path = 'dsm/share.cgi';
                break;
            case 'Group':
                $path = 'dsm/group.cgi';
                break;
            case 'Application':
                $path = 'dsm/app.cgi';
                break;
            case 'Service':
                $path = 'dsm/service.cgi';
                break;
            case 'Package':
                $path = 'dsm/package.cgi';
                break;
            case 'Network':
                $path = 'dsm/network.cgi';
                break;
            case 'Volume':
                $path = 'dsm/volume.cgi';
                break;
            case 'AutoBlock':
                $path = 'dsm/autoblock.cgi';
                break;
            case 'LogViewer':
                $path = 'dsm/logviewer.cgi';
                break;
            case 'Connection':
                $path = 'dsm/connection.cgi';
                break;
            case 'iSCSI':
                $path = 'dsm/iscsi.cgi';
                break;
            default:
                throw new Exception('Unknown "' . $type . '" object');
        }

        return $this->request($type, $path, 'list', ['limit' => $limit, 'offset' => $offset]);
    }
}
