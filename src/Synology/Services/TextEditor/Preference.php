<?php

namespace Synology\Services\TextEditor;

use Synology\Services\BaseService;

/**
 * Class Preference - created automatically by ServiceGenerator
 *
 * API: SYNO.TextEditor.Preference
 * ```
 * $result = $syno->texteditor()->preference()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=TextEditor#/TextEditor.Preference
 * @package Synology\Services\TextEditor
 */
class Preference extends BaseService
{
    public const API_SERVICE_NAME = 'TextEditor.Preference';
    public const API_VERSION = 1;

    /**
     * Summary of get
     *
     * API method: SYNO.TextEditor.Preference get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.TextEditor.Preference-get.json
     * @return array<mixed>|bool|string|\stdClass
     */
    public function get()
    {
        $api = '';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
