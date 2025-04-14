<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class ClientFactory
 *
 * @package Synology\Applications
 */
class ClientFactory
{
    public const API_SERVICE_CLIENTS = [
        'AudioStation',
        'Core',
        'DownloadStation',
        'DSM',
        'DTV',
        'FileStation',
        'SurveillanceStation',
        'VideoStation',
    ];

    /**
     * Get Synology API Client for serviceName
     *
     * @param string $serviceName
     * @param string $address
     * @param int    $port
     * @param string $protocol
     * @param int    $version
     */
    public static function getClient($serviceName, $address, $port = null, $protocol = null, $version = 1)
    {
        if (!empty($serviceName) && in_array($serviceName, self::API_SERVICE_CLIENTS)) {
            $className = "\\Synology\\Applications\\" . $serviceName;
            return new $className($address, $port, $protocol, $version);
        }
        return static::getGeneric($serviceName, $address, $port, $protocol, $version);
    }

    /**
     * Get Generic API Client for serviceName
     *
     * @param string $serviceName
     * @param string $address
     * @param int    $port
     * @param string $protocol
     * @param int    $version
     */
    public static function getGeneric($serviceName, $address, $port = null, $protocol = null, $version = 1)
    {
        $className = "\\Synology\\Applications\\GenericClient";
        return new $className($serviceName, $address, $port, $protocol, $version);
    }
}
