<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;

/**
 * Class DTV
 *
 * @package Synology\Applications
 * @deprecated 1.5.4 no longer available on DSM 7.2.2
 */
class DTV extends Authenticate
{
    public const API_SERVICE_NAME = 'DTV';
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
    public function __construct($address, $port = null, $protocol = null, $version = 1, $verifySSL = false)
    {
        parent::__construct(self::API_SERVICE_NAME, self::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }
}
