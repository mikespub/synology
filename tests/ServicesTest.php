<?php

namespace Synology\Tests;

use PHPUnit\Framework\TestCase;
use Synology\Services\CloudSync;
use Synology\Services\ServicesClient;

class ServicesTest extends TestCase
{
    use TestHelper;

    public function testGetServicesClient(): void
    {
        $resultFile = 'SYNO.CloudSync-list_conn.json';
        $syno = $this->getServicesClient($resultFile);

        $expected = ServicesClient::class;
        $this->assertInstanceOf($expected, $syno);

        $cloudsync = $syno->cloudsync();

        $expected = CloudSync::class;
        $this->assertInstanceOf($expected, $cloudsync);

        $result = $cloudsync->listConn();
        $this->compareResultFile($resultFile, $result);
    }
}
