<?php

namespace Synology\Tests;

use PHPUnit\Framework\TestCase;
use Synology\Api;

class ApiTest extends TestCase
{
    use TestHelper;

    public function testGetAvailableApi(): void
    {
        $resultFile = 'SYNO.API.Info-query.json';
        $client = $this->getMockClient();
        $responses = $this->getResponseFromFile($resultFile);
        $client->setResponseFactory($responses);

        $service = new Api($this->address, $this->port, $this->protocol, $this->version, $this->verifySSL);
        $service->setHttpClient($client);

        $result = $service->getAvailableApi();
        $this->compareResultFile($result, $resultFile, true);
    }
}
