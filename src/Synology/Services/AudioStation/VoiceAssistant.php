<?php

namespace Synology\Services\AudioStation;

use Synology\Services\BaseService;

/**
 * Class VoiceAssistant - created automatically by ServiceGenerator
 *
 * API: SYNO.AudioStation.VoiceAssistant
 * ```
 * $result = $syno->audiostation()->voiceassistant()->getChallenge();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation#/AudioStation.VoiceAssistant
 * @package Synology\Services\AudioStation
 */
class VoiceAssistant extends BaseService
{
    public const API_SERVICE_NAME = 'AudioStation.VoiceAssistant';
    public const API_VERSION = 3;

    /**
     * Summary of getChallenge
     *
     * API method: SYNO.AudioStation.VoiceAssistant.Challenge get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.VoiceAssistant.Challenge-get.json
     * @return array|bool|string|\stdClass
     */
    public function getChallenge()
    {
        $api = 'Challenge';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getInfo
     *
     * API method: SYNO.AudioStation.VoiceAssistant.Info get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.AudioStation.VoiceAssistant.Info-get.json
     * @return array|bool|string|\stdClass
     */
    public function getInfo()
    {
        $api = 'Info';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
