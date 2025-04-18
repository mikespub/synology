<?php

namespace Synology\Tests;

use PHPUnit\Framework\TestCase;
use Synology\Applications\Core;

class CoreTest extends TestCase
{
    use TestHelper;

    public function testGetAvailableApi(): void
    {
        $resultFile = 'SYNO.API.Info-query.json';
        $client = $this->getMockClient();
        $responses = $this->getResponseFromFile($resultFile);
        $client->setResponseFactory($responses);

        $api = new Core($this->address, $this->port, $this->protocol, $this->version, $this->verifySSL);
        $api->setHttpClient($client);

        $result = $api->getAvailableApi();
        $result = array_keys($result);
        sort($result);

        // filter API names with SYNO.Core. prefix
        $resultPath = $this->getResultsFilePath($resultFile);
        $expected = (array) json_decode(file_get_contents($resultPath));
        $apiNames = array_keys($expected);
        $prefix = 'SYNO.Core.';
        $expected = array_filter($apiNames, function ($api) use ($prefix) {
            return str_starts_with($api, $prefix);
        });
        sort($expected);
        $this->assertEquals($expected, $result);
    }

    public function testGetObjectsUser(): void
    {
        $serviceName = 'Core';
        $resultFile = 'SYNO.Core.User-list.json';
        /** @var Core $service */
        $service = $this->getConnectedService($serviceName, $resultFile);
        $this->assertInstanceOf(Core::class, $service);

        $result = $service->getObjects('User');
        var_dump($result);
        $this->compareResultFile($result, $resultFile);
    }
}
