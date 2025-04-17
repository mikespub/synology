<?php

/**
 * This file is an example on how to use Synology\Api
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Synology\Applications\ClientFactory;

// using API classes
$synology = new Synology\Api('192.168.10.5', 5001, 'https', 1);
$synology->activateDebug();
$synology->connect('admin', '****');
print_r($synology->getAvailableApi());

// using client factory
/** @var \Synology\Applications\Core $synology */
$synology = ClientFactory::getClient('Core', '192.168.10.5', 5001, 'https');
$synology->connect('admin', '****');
print_r($synology->getObjects('User'));

// using generic client
$synology = ClientFactory::getGeneric($service, '192.168.10.5', 5001, 'https');
$synology->connect('admin', '****');
// use generic client to call any api method
$result = $synology->call($api, $path, $method, $params, $version);
