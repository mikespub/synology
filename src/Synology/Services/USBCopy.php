<?php

namespace Synology\Services;

/**
 * Class USBCopy - created automatically by ServiceGenerator
 *
 * API: SYNO.USBCopy
 * ```
 * $result = $syno->usbcopy()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=USBCopy
 * @package Synology\Services
 */
class USBCopy extends BaseService
{
    public const API_SERVICE_NAME = 'USBCopy';
    public const API_VERSION = 1;

    /**
     * Summary of list
     *
     * API method: SYNO.USBCopy list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.USBCopy-list.json
     * @return array|bool|string|\stdClass
     */
    public function list()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
