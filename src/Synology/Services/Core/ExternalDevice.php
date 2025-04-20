<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class ExternalDevice - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.ExternalDevice
 * ```
 * $result = $syno->core()->externaldevice()->listPrinter();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.ExternalDevice
 * @package Synology\Services\Core
 */
class ExternalDevice extends BaseService
{
    public const API_SERVICE_NAME = 'Core.ExternalDevice';
    public const API_VERSION = 1;

    /**
     * Summary of listPrinter
     *
     * API method: SYNO.Core.ExternalDevice.Printer list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Printer-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listPrinter()
    {
        $api = 'Printer';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPrinterBonjourSharing
     *
     * API method: SYNO.Core.ExternalDevice.Printer.BonjourSharing get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Printer.BonjourSharing-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getPrinterBonjourSharing()
    {
        $api = 'Printer.BonjourSharing';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPrinterDriver
     *
     * API method: SYNO.Core.ExternalDevice.Printer.Driver list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Printer.Driver-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listPrinterDriver()
    {
        $api = 'Printer.Driver';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPrinterOAuth
     *
     * API method: SYNO.Core.ExternalDevice.Printer.OAuth get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Printer.OAuth-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getPrinterOAuth()
    {
        $api = 'Printer.OAuth';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listStorageEUnit
     *
     * API method: SYNO.Core.ExternalDevice.Storage.EUnit list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Storage.EUnit-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listStorageEUnit()
    {
        $api = 'Storage.EUnit';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getStorageSetting
     *
     * API method: SYNO.Core.ExternalDevice.Storage.Setting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Storage.Setting-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getStorageSetting()
    {
        $api = 'Storage.Setting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listStorageUSB
     *
     * API method: SYNO.Core.ExternalDevice.Storage.USB list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Storage.USB-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listStorageUSB()
    {
        $api = 'Storage.USB';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listStorageeSATA
     *
     * API method: SYNO.Core.ExternalDevice.Storage.eSATA list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.Storage.eSATA-list.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function listStorageeSATA()
    {
        $api = 'Storage.eSATA';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getUPS
     *
     * API method: SYNO.Core.ExternalDevice.UPS get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.ExternalDevice.UPS-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function getUPS()
    {
        $api = 'UPS';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
