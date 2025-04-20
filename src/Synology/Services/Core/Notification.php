<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class Notification - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.Notification
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Notification
 * @package Synology\Services\Core
 */
class Notification extends BaseService
{
    public const API_SERVICE_NAME = 'Core.Notification';
    public const API_VERSION = 1;

    /**
     * Summary of getAdvanceCustomizedData
     *
     * API method: SYNO.Core.Notification.Advance.CustomizedData get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Advance.CustomizedData-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAdvanceCustomizedData()
    {
        $api = 'Advance.CustomizedData';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listAdvanceFilterSettings
     *
     * API method: SYNO.Core.Notification.Advance.FilterSettings list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Advance.FilterSettings-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAdvanceFilterSettings()
    {
        $api = 'Advance.FilterSettings';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listAdvanceFilterSettingsProfile
     *
     * API method: SYNO.Core.Notification.Advance.FilterSettings.Profile list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Advance.FilterSettings.Profile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAdvanceFilterSettingsProfile()
    {
        $api = 'Advance.FilterSettings.Profile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listAdvanceFilterSettingsTemplate
     *
     * API method: SYNO.Core.Notification.Advance.FilterSettings.Template list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Advance.FilterSettings.Template-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAdvanceFilterSettingsTemplate()
    {
        $api = 'Advance.FilterSettings.Template';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getAdvanceVariables
     *
     * API method: SYNO.Core.Notification.Advance.Variables get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Advance.Variables-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAdvanceVariables()
    {
        $api = 'Advance.Variables';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getCMSConf
     *
     * API method: SYNO.Core.Notification.CMS.Conf get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.CMS.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getCMSConf()
    {
        $api = 'CMS.Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMailAuth
     *
     * API method: SYNO.Core.Notification.Mail.Auth get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Mail.Auth-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMailAuth()
    {
        $api = 'Mail.Auth';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getMailConf
     *
     * API method: SYNO.Core.Notification.Mail.Conf get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Mail.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getMailConf()
    {
        $api = 'Mail.Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPushAuthToken
     *
     * API method: SYNO.Core.Notification.Push.AuthToken get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Push.AuthToken-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPushAuthToken()
    {
        $api = 'Push.AuthToken';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPushConf
     *
     * API method: SYNO.Core.Notification.Push.Conf get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Push.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPushConf()
    {
        $api = 'Push.Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getPushMail
     *
     * API method: SYNO.Core.Notification.Push.Mail get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Push.Mail-get.json
     * @return array|bool|string|\stdClass
     */
    public function getPushMail()
    {
        $api = 'Push.Mail';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPushMobile
     *
     * API method: SYNO.Core.Notification.Push.Mobile list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Push.Mobile-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPushMobile()
    {
        $api = 'Push.Mobile';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPushWebhookProvider
     *
     * API method: SYNO.Core.Notification.Push.Webhook.Provider list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.Push.Webhook.Provider-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPushWebhookProvider()
    {
        $api = 'Push.Webhook.Provider';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSMSConf
     *
     * API method: SYNO.Core.Notification.SMS.Conf get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.SMS.Conf-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSMSConf()
    {
        $api = 'SMS.Conf';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSMSProvider
     *
     * API method: SYNO.Core.Notification.SMS.Provider list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Notification.SMS.Provider-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSMSProvider()
    {
        $api = 'SMS.Provider';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
