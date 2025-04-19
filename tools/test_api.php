<?php

/**
 * This file tries to call the 'getinfo', 'list' or 'get' method for
 * every API defined in combined.json. Results are matched against a
 * schema if available, and errors are saved for evaluation
 *
 * ```
 * $ php tools/test_api.php [filter]
 * ```
 */
if (PHP_SAPI !== 'cli') {
    echo "This script is meant to run from commmand line\n";
    exit;
}
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Synology\Tools\TestApi;

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

$filter = $argv[1] ?? '';

$tester = new TestApi();
$tester->runTest($filter);
