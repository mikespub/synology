<?php

/**
 *
 * @author Ondrej Pospisil <https://github.com/pospon>
 * https://global.download.synology.com/download/Document/DeveloperGuide/Surveillance_Station_Web_API_v2.4.pdf
 */

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

class SurveillanceStation extends Authenticate
{
    public const API_SERVICE_NAME = 'SurveillanceStation';

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
     * @return array|bool|\stdClass
     * @throws Exception
     */
    public function getInfo()
    {
        return $this->_request('Info', static::API_PATH, 'GetInfo');
    }

    /**
     * @return array|bool|\stdClass
     * @throws Exception
     */
    public function getCameraList()
    {
        return $this->_request('Camera', static::API_PATH, 'List');
    }

    /**
     * @param $cameraId
     * @return array|bool|\stdClass
     * @throws Exception
     */
    public function getSnapshot($cameraId)
    {
        $parameters = [
            'cameraId' => $cameraId,
        ];
        return $this->_request('Camera', static::API_PATH, 'GetSnapshot', $parameters);
    }

    /**
     * Get home mode related setting and information, including current binding
     * mobile devices if required.
     *
     * @param boolean $need_mobiles
     *   (optional) Home mode info will conclude which mobile devices is binding
     *   to the server, default to false.
     *
     * @return array|bool|\stdClass
     *   The home mode related setting and information.
     */
    public function getHomeModeInfo($need_mobiles = false)
    {
        $parameters = [
            'need_mobiles' => $need_mobiles,
        ];
        return $this->_request('HomeMode', static::API_PATH, 'GetInfo', $parameters, 1);
    }

    /**
     * Switch home mode on/off.
     *
     * @param boolean $on
     *   True to turn on home mode, while false to turn it off.
     *
     * @return array|bool|\stdClass
     *   This method has no specific response data. It returns an empty success
     *   response if it completes without error.
     */
    public function switchHomeMode($on)
    {
        $parameters = [
            'on' => $on,
        ];
        return $this->_request('HomeMode', static::API_PATH, 'Switch', $parameters, 1);
    }

}
