<?php

namespace Synology\Tests;

use Synology\Api\Authenticate;
use Synology\Applications\ClientFactory;
use Synology\Services\ServicesClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\HttpClient\Response\JsonMockResponse;

/**
 * Summary of TestHelper
 */
trait TestHelper
{
    protected string $address = 'localhost';
    protected int $port = 5000;
    protected string $protocol = 'http';
    protected string $user = 'admin';
    protected string $pass = '*****';
    protected int $version = 1;
    protected bool $verifySSL = false;
    protected ?string $results = null;

    /**
     * Summary of getMockClient
     * @param mixed $responseFactory
     * @param string|null $baseUri
     * @return HttpClientInterface
     */
    protected function getMockClient($responseFactory = null, $baseUri = null)
    {
        return new MockHttpClient($responseFactory, $baseUri);
    }

    /**
     * Summary of getResponseFromFile
     * @param string $file
     * @param array<string, mixed> $info
     * @return array<MockResponse>
     */
    protected function getResponseFromFile($file, $info = [])
    {
        // add response to disconnect() here too
        $disconnect = new JsonMockResponse(['success' => true]);

        $path = $this->getResultsFilePath($file);
        if (str_ends_with($path, '.json') && empty($info)) {
            $json = file_get_contents($path);
            $data = json_decode($json, true, flags: \JSON_THROW_ON_ERROR);
            // original response body for saved result data
            $body = [
                'data' => $data,
                'success' => true,
            ];
            return [new JsonMockResponse($body), $disconnect];
        }
        return [MockResponse::fromFile($path, $info), $disconnect];
    }

    /**
     * Summary of getResultsFilePath
     * @param string $file
     * @return string
     */
    protected function getResultsFilePath($file)
    {
        $this->results ??= dirname(__DIR__, 3) . '/tools/results';
        return $this->results . '/' . $file;
    }

    /**
     * Summary of getConnectedService
     * @param string $serviceName
     * @param string $resultFile
     * @return Authenticate
     */
    protected function getConnectedService($serviceName, $resultFile): Authenticate
    {
        // get http client with loginFile first
        $client = $this->getMockClient();
        $loginFile = 'SYNO.API.Auth-login.json';
        $responses = $this->getResponseFromFile($loginFile);
        $client->setResponseFactory($responses);

        // get synology client for serviceName
        $service = ClientFactory::getClient($serviceName, $this->address, $this->port, $this->protocol, $this->version);
        $service->setHttpClient($client);

        // connect with loginFile response
        $service->connect($this->user, $this->pass);
        $this->assertTrue($service->isConnected());

        // set next response to resultFile
        $responses = $this->getResponseFromFile($resultFile);
        $client->setResponseFactory($responses);

        return $service;
    }

    /**
     * Summary of compareResultFile
     * @param string $resultFile
     * @param mixed $result
     * @param bool $assoc
     * @return void
     */
    protected function compareResultFile($resultFile, $result, $assoc = false)
    {
        $resultPath = $this->getResultsFilePath($resultFile);
        if ($assoc) {
            // get top-level assoc array instead of stdClass here
            $expected = (array) json_decode(file_get_contents($resultPath));
        } else {
            $expected = json_decode(file_get_contents($resultPath));
        }
        $this->assertEquals($expected, $result);
    }

    /**
     * Summary of getServicesClient
     * @param string $resultFile
     * @return ServicesClient
     */
    protected function getServicesClient($resultFile): Authenticate
    {
        // get http client with loginFile first
        $client = $this->getMockClient();
        $loginFile = 'SYNO.API.Auth-login.json';
        $responses = $this->getResponseFromFile($loginFile);
        $client->setResponseFactory($responses);

        // get services client for any service
        $syno = ClientFactory::getServices($this->address, $this->port, $this->protocol, $this->version);
        $syno->setHttpClient($client);

        // connect with loginFile response
        $syno->connect($this->user, $this->pass);
        $this->assertTrue($syno->isConnected());

        // set next response to resultFile
        $responses = $this->getResponseFromFile($resultFile);
        $client->setResponseFactory($responses);

        return $syno;
    }
}
