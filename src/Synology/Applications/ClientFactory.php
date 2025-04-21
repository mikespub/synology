<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Services\ServicesClient;
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
     * @param string  $serviceName
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @return Authenticate
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
     * @param string  $serviceName for SYNO.Service[.*] API method calls
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @return GenericClient
     */
    public static function getGeneric($serviceName, $address, $port = null, $protocol = null, $version = 1)
    {
        $className = GenericClient::class;
        return new $className($serviceName, $address, $port, $protocol, $version);
    }

    /**
     * Get Service API Client
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @return ServicesClient
     */
    public static function getServices($address, $port = null, $protocol = null)
    {
        $className = ServicesClient::class;
        $serviceName = 'default';
        return new $className($serviceName, $address, $port, $protocol);
    }
}
