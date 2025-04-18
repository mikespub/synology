<?php

namespace Synology\Tests;

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
     * @return MockResponse
     */
    protected function getResponseFromFile($file, $info = [])
    {
        $path = $this->getResultsFilePath($file);
        if (str_ends_with($path, '.json') && empty($info)) {
            return JsonMockResponse::fromFile($path);
        }
        return MockResponse::fromFile($path, $info);
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
}
