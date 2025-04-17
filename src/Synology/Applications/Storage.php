<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class Storage
 *
 * ```
 * $synology = new Synology\Applications\Storage($api_host, $api_port, $api_http, 1);
 * $synology->connect($api_user, $api_pass);
 * $info = $synology->getInfo();
 * foreach ($info->storagePools as $pool) {
 *     print_r($pool);
 * }
 * foreach ($info->volumes as $volume) {
 *     print_r($volume);
 * }
 * foreach ($info->disks as $disk) {
 *     print_r($disk);
 * }
 * ```
 *
 * @package Synology\Applications
 */
class Storage extends Authenticate
{
    public const API_SERVICE_NAME = 'Storage.CGI';
    public const API_VERSION = 1;

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version
     * @param bool    $verifySSL
     */
    public function __construct($address, $port = null, $protocol = null, $version = self::API_VERSION, $verifySSL = false)
    {
        parent::__construct(static::API_SERVICE_NAME, static::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * Get Storage Info
     *
     * @return \stdClass
     */
    public function getInfo()
    {
        $type = 'Storage';
        $path = static::API_PATH;
        $method = 'load_info';
        $params = [];
        $version = static::API_VERSION;

        return $this->_request($type, $path, $method, $params, $version);
    }
}
