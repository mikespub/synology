<?php

namespace Synology\Services;

use Synology\Applications\GenericClient;

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

    protected GenericClient $client;

    public function __construct($client)
    {
        $this->client = $client;
    }
}
