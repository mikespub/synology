<?php

namespace Synology\Tests;

use PHPUnit\Framework\TestCase;
use Synology\Services\CloudSync;
use Synology\Services\ServiceClient;

class ServiceTest extends TestCase
{
    use TestHelper;

    public function testGetServiceClient(): void
    {
        $resultFile = 'SYNO.CloudSync-list_conn.json';
        $service = $this->getServiceClient($resultFile);

        $expected = ServiceClient::class;
        $this->assertInstanceOf($expected, $service);

        $cloudsync = $service->cloudsync();

        $expected = CloudSync::class;
        $this->assertInstanceOf($expected, $cloudsync);

        $result = $cloudsync->listConn();
        $this->compareResultFile($resultFile, $result);
    }
}
