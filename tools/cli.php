<?php

/**
 * This file provides a command line interface and menu to call
 * the Synology API.
 *
 * ```
 * $ php tools/cli.php <api> <method> <params>
 * ```
 */
if (PHP_SAPI !== 'cli') {
    echo "This script is meant to run from commmand line\n";
    exit;
}
if (!file_exists(__DIR__ . '/.env') && empty($_ENV['SYNO_HOST'])) {
    echo "Copy tools/.env.sample to tools/.env and adapt as needed, or set environment variables\n";
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
