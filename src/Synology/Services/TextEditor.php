<?php

namespace Synology\Services;

/**
 * Class TextEditor - created automatically by ServiceGenerator
 *
 * API: SYNO.TextEditor
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=TextEditor
 * @package Synology\Services
 */
class TextEditor extends BaseService
{
    public const API_SERVICE_NAME = 'TextEditor';
    public const API_VERSION = 1;

    /**
     * Summary of getPreference
     *
     * API method: SYNO.TextEditor.Preference get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.TextEditor.Preference-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPreference()
    {
        $api = 'Preference';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
