<?php

/**
 * Generate new OpenAPI files for Synology Web APIs
 *
 * This PHP script will analyze the API json files available in ../docs
 * when you install this package with composer, and generate new OpenAPI
 * files based on the APIs and templates provided.
 *
 * If you install Swagger Editor or Swagger UI under your Web Station, and
 * adapt the .htaccess file as mentioned in the OpenAPI file, you can then
 * explore some of the Synology Web APIs directly in your browser.
 *
 *
 * If you have an older DSM release or older packages that don't support the
 * latest API version, you can refresh the API files by calling the function
 * refresh_api_files() below and generate the OpenAPI files again.
 */
if (PHP_SAPI !== 'cli') {
    echo "This script is meant to run from commmand line\n";
    exit;
}
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Synology\Tools\Generator;

// TODO: run example.php afterwards to copy files for Swagger Editor

$generator = new Generator();
//$basedir = dirname(__DIR__) . '/docs/';
//$generator->refreshApiFiles($basedir);
//$generator->mergeQueryFiles();
//exit;
//$generator->combineJsonFiles($basedir);
//$json_file = __DIR__ . '/required.json';
//$required = $generator->checkRequiredErrors();
//file_put_contents($json_file, json_encode($required, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
$generator->generateOpenAPI();
