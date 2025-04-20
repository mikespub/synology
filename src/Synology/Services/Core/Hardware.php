<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Hardware - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Hardware
 * ```
 * $result = $syno->core()->hardware()->getBeepControl();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Hardware
 * @package Synology\Services\Core
 */
class Hardware extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Hardware';
    public const API_VERSION = 1;

    /**
     * Summary of getBeepControl
     *
     * API method: SYNO.Core.Hardware.BeepControl get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.BeepControl-get.json
     * @return array|bool|string|\stdClass
     */
    public function getBeepControl()
    {
        $api = 'BeepControl';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFanSpeed
     *
     * API method: SYNO.Core.Hardware.FanSpeed get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.FanSpeed-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFanSpeed()
    {
        $api = 'FanSpeed';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getHibernation
     *
     * API method: SYNO.Core.Hardware.Hibernation get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.Hibernation-get.json
     * @return array|bool|string|\stdClass
     */
    public function getHibernation()
    {
        $api = 'Hibernation';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getLCM
     *
     * API method: SYNO.Core.Hardware.LCM get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.LCM-get.json
     * @return array|bool|string|\stdClass
     */
    public function getLCM()
    {
        $api = 'LCM';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getLedBrightness
     *
     * API method: SYNO.Core.Hardware.Led.Brightness get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.Led.Brightness-get.json
     * @return array|bool|string|\stdClass
     */
    public function getLedBrightness()
    {
        $api = 'Led.Brightness';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMemoryLayout
     *
     * API method: SYNO.Core.Hardware.MemoryLayout get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.MemoryLayout-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMemoryLayout()
    {
        $api = 'MemoryLayout';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNeedReboot
     *
     * API method: SYNO.Core.Hardware.NeedReboot get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.NeedReboot-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNeedReboot()
    {
        $api = 'NeedReboot';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPowerRecovery
     *
     * API method: SYNO.Core.Hardware.PowerRecovery get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.PowerRecovery-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPowerRecovery()
    {
        $api = 'PowerRecovery';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSpectreMeltdown
     *
     * API method: SYNO.Core.Hardware.SpectreMeltdown get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.SpectreMeltdown-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSpectreMeltdown()
    {
        $api = 'SpectreMeltdown';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVideoTranscoding
     *
     * API method: SYNO.Core.Hardware.VideoTranscoding get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.VideoTranscoding-get.json
     * @return array|bool|string|\stdClass
     */
    public function getVideoTranscoding()
    {
        $api = 'VideoTranscoding';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getZRAM
     *
     * API method: SYNO.Core.Hardware.ZRAM get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Hardware.ZRAM-get.json
     * @return array|bool|string|\stdClass
     */
    public function getZRAM()
    {
        $api = 'ZRAM';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
