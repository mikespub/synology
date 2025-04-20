<?php

namespace Synology\Services;

/**
 * Class BaseService
 *
 * @package Synology\Services
 */
class BaseService
{
    public const API_NAMESPACE = 'SYNO';
    public const API_SERVICE_NAME = 'Base';
    public const API_VERSION = 1;
    public const API_PATH = 'entry.cgi';

    protected ServicesClient $client;

    /**
     * Set services client for calls
     *
     * @param ServicesClient $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }
}
