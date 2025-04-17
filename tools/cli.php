<?php

/**
 * This file provides a command line interface and menu to call
 * the Synology API.
 *
 * $ cli.php <api> <method> <params>
 *
 */
if (PHP_SAPI !== 'cli') {
    echo "This script is meant to run from commmand line\n";
    exit;
}

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Synology\Cli;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// use Symfony\Component\Console\Application;
//
// $application = new Application();
//
// ... register commands
//
// $application->run();
//
class ApiCommand extends Cli
{
    // ...
}

$command = new ApiCommand();
$command->cli($argv);
