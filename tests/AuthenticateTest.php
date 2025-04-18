<?php

namespace Synology\Tests;

use PHPUnit\Framework\TestCase;
use Synology\Api\Authenticate;
use Synology\Api;

class AuthenticateTest extends TestCase
{
    use TestHelper;

    public function testConnection(): void
    {
        $resultFile = 'SYNO.API.Auth-login.json';
        $client = $this->getMockClient();
        $responses = $this->getResponseFromFile($resultFile);
        $client->setResponseFactory($responses);

        $authenticate = new Authenticate('Core', 'SYNO', $this->address, $this->port, $this->protocol, $this->version, $this->verifySSL);
        $authenticate->setHttpClient($client);

        $result = $authenticate->connect($this->user, $this->pass);
        $expected = Api::class;
        $this->assertEquals($expected, $result::class);

        $result = $authenticate->isConnected();
        $expected = true;
        $this->assertEquals($expected, $result);

        $result = $authenticate->getSessionId();
        $expected = '*****';
        $this->assertEquals($expected, $result);

        $result = $authenticate->setSessionId($result);
        $expected = Authenticate::class;
        $this->assertEquals($expected, $result::class);

        $result = $authenticate->activateDebug();
        $expected = Authenticate::class;
        $this->assertEquals($expected, $result::class);

        $result = $authenticate->keepConnection();
        $expected = Authenticate::class;
        $this->assertEquals($expected, $result::class);

        // with debug activated
        ob_start();
        $result = $authenticate->disconnect();
        $output = ob_get_clean();

        $expected = Api::class;
        $this->assertEquals($expected, $result::class);

        $expected = 'Disconnect Session: Core';
        $this->assertStringContainsString($expected, $output);
    }
}
