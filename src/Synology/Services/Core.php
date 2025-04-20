<?php

namespace Synology\Services;

/**
 * Class Core - created automatically by ServiceGenerator
 *
 * API: SYNO.Core
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core
 * @package Synology\Services
 */
class Core extends BaseService
{
    public const API_SERVICE_NAME = 'Core';
    public const API_VERSION = 1;
    protected ?Core\ActionPriv $actionprivSvc = null;
    protected ?Core\AppPortal $appportalSvc = null;
    protected ?Core\AppPriv $appprivSvc = null;
    protected ?Core\BandwidthControl $bandwidthcontrolSvc = null;
    protected ?Core\CMS $cmsSvc = null;
    protected ?Core\Certificate $certificateSvc = null;
    protected ?Core\DDNS $ddnsSvc = null;
    protected ?Core\DSMNotify $dsmnotifySvc = null;
    protected ?Core\Desktop $desktopSvc = null;
    protected ?Core\Directory $directorySvc = null;
    protected ?Core\EW $ewSvc = null;
    protected ?Core\ExternalDevice $externaldeviceSvc = null;
    protected ?Core\Factory $factorySvc = null;
    protected ?Core\FileServ $fileservSvc = null;
    protected ?Core\Group $groupSvc = null;
    protected ?Core\Hardware $hardwareSvc = null;
    protected ?Core\ISCSI $iscsiSvc = null;
    protected ?Core\MediaIndexing $mediaindexingSvc = null;
    protected ?Core\MyDSCenter $mydscenterSvc = null;
    protected ?Core\Network $networkSvc = null;
    protected ?Core\Notification $notificationSvc = null;
    protected ?Core\OAuth $oauthSvc = null;
    protected ?Core\Package $packageSvc = null;
    protected ?Core\PersonalNotification $personalnotificationSvc = null;
    protected ?Core\Polling $pollingSvc = null;
    protected ?Core\PortForwarding $portforwardingSvc = null;
    protected ?Core\QuickConnect $quickconnectSvc = null;
    protected ?Core\RecycleBin $recyclebinSvc = null;
    protected ?Core\Region $regionSvc = null;
    protected ?Core\Report $reportSvc = null;
    protected ?Core\Security $securitySvc = null;
    protected ?Core\SecurityScan $securityscanSvc = null;
    protected ?Core\Service $serviceSvc = null;
    protected ?Core\Share $shareSvc = null;
    protected ?Core\Sharing $sharingSvc = null;
    protected ?Core\SmartBlock $smartblockSvc = null;
    protected ?Core\SupportForm $supportformSvc = null;
    protected ?Core\SyslogClient $syslogclientSvc = null;
    protected ?Core\System $systemSvc = null;
    protected ?Core\Theme $themeSvc = null;
    protected ?Core\Upgrade $upgradeSvc = null;
    protected ?Core\User $userSvc = null;
    protected ?Core\Virtualization $virtualizationSvc = null;
    protected ?Core\Web $webSvc = null;

    /**
     * Summary of actionpriv
     *
     * API: SYNO.Core\ActionPriv
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\ActionPriv
     * @return Core\ActionPriv
     */
    public function actionpriv()
    {
        $this->actionprivSvc ??= new Core\ActionPriv($this->client);
        return $this->actionprivSvc;
    }

    /**
     * Summary of appportal
     *
     * API: SYNO.Core\AppPortal
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\AppPortal
     * @return Core\AppPortal
     */
    public function appportal()
    {
        $this->appportalSvc ??= new Core\AppPortal($this->client);
        return $this->appportalSvc;
    }

    /**
     * Summary of apppriv
     *
     * API: SYNO.Core\AppPriv
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\AppPriv
     * @return Core\AppPriv
     */
    public function apppriv()
    {
        $this->appprivSvc ??= new Core\AppPriv($this->client);
        return $this->appprivSvc;
    }

    /**
     * Summary of bandwidthcontrol
     *
     * API: SYNO.Core\BandwidthControl
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\BandwidthControl
     * @return Core\BandwidthControl
     */
    public function bandwidthcontrol()
    {
        $this->bandwidthcontrolSvc ??= new Core\BandwidthControl($this->client);
        return $this->bandwidthcontrolSvc;
    }

    /**
     * Summary of cms
     *
     * API: SYNO.Core\CMS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\CMS
     * @return Core\CMS
     */
    public function cms()
    {
        $this->cmsSvc ??= new Core\CMS($this->client);
        return $this->cmsSvc;
    }

    /**
     * Summary of certificate
     *
     * API: SYNO.Core\Certificate
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Certificate
     * @return Core\Certificate
     */
    public function certificate()
    {
        $this->certificateSvc ??= new Core\Certificate($this->client);
        return $this->certificateSvc;
    }

    /**
     * Summary of ddns
     *
     * API: SYNO.Core\DDNS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\DDNS
     * @return Core\DDNS
     */
    public function ddns()
    {
        $this->ddnsSvc ??= new Core\DDNS($this->client);
        return $this->ddnsSvc;
    }

    /**
     * Summary of dsmnotify
     *
     * API: SYNO.Core\DSMNotify
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\DSMNotify
     * @return Core\DSMNotify
     */
    public function dsmnotify()
    {
        $this->dsmnotifySvc ??= new Core\DSMNotify($this->client);
        return $this->dsmnotifySvc;
    }

    /**
     * Summary of desktop
     *
     * API: SYNO.Core\Desktop
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Desktop
     * @return Core\Desktop
     */
    public function desktop()
    {
        $this->desktopSvc ??= new Core\Desktop($this->client);
        return $this->desktopSvc;
    }

    /**
     * Summary of directory
     *
     * API: SYNO.Core\Directory
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Directory
     * @return Core\Directory
     */
    public function directory()
    {
        $this->directorySvc ??= new Core\Directory($this->client);
        return $this->directorySvc;
    }

    /**
     * Summary of ew
     *
     * API: SYNO.Core\EW
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\EW
     * @return Core\EW
     */
    public function ew()
    {
        $this->ewSvc ??= new Core\EW($this->client);
        return $this->ewSvc;
    }

    /**
     * Summary of externaldevice
     *
     * API: SYNO.Core\ExternalDevice
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\ExternalDevice
     * @return Core\ExternalDevice
     */
    public function externaldevice()
    {
        $this->externaldeviceSvc ??= new Core\ExternalDevice($this->client);
        return $this->externaldeviceSvc;
    }

    /**
     * Summary of factory
     *
     * API: SYNO.Core\Factory
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Factory
     * @return Core\Factory
     */
    public function factory()
    {
        $this->factorySvc ??= new Core\Factory($this->client);
        return $this->factorySvc;
    }

    /**
     * Summary of fileserv
     *
     * API: SYNO.Core\FileServ
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\FileServ
     * @return Core\FileServ
     */
    public function fileserv()
    {
        $this->fileservSvc ??= new Core\FileServ($this->client);
        return $this->fileservSvc;
    }

    /**
     * Summary of group
     *
     * API: SYNO.Core\Group
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Group
     * @return Core\Group
     */
    public function group()
    {
        $this->groupSvc ??= new Core\Group($this->client);
        return $this->groupSvc;
    }

    /**
     * Summary of hardware
     *
     * API: SYNO.Core\Hardware
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Hardware
     * @return Core\Hardware
     */
    public function hardware()
    {
        $this->hardwareSvc ??= new Core\Hardware($this->client);
        return $this->hardwareSvc;
    }

    /**
     * Summary of iscsi
     *
     * API: SYNO.Core\ISCSI
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\ISCSI
     * @return Core\ISCSI
     */
    public function iscsi()
    {
        $this->iscsiSvc ??= new Core\ISCSI($this->client);
        return $this->iscsiSvc;
    }

    /**
     * Summary of mediaindexing
     *
     * API: SYNO.Core\MediaIndexing
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\MediaIndexing
     * @return Core\MediaIndexing
     */
    public function mediaindexing()
    {
        $this->mediaindexingSvc ??= new Core\MediaIndexing($this->client);
        return $this->mediaindexingSvc;
    }

    /**
     * Summary of mydscenter
     *
     * API: SYNO.Core\MyDSCenter
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\MyDSCenter
     * @return Core\MyDSCenter
     */
    public function mydscenter()
    {
        $this->mydscenterSvc ??= new Core\MyDSCenter($this->client);
        return $this->mydscenterSvc;
    }

    /**
     * Summary of network
     *
     * API: SYNO.Core\Network
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Network
     * @return Core\Network
     */
    public function network()
    {
        $this->networkSvc ??= new Core\Network($this->client);
        return $this->networkSvc;
    }

    /**
     * Summary of notification
     *
     * API: SYNO.Core\Notification
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Notification
     * @return Core\Notification
     */
    public function notification()
    {
        $this->notificationSvc ??= new Core\Notification($this->client);
        return $this->notificationSvc;
    }

    /**
     * Summary of oauth
     *
     * API: SYNO.Core\OAuth
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\OAuth
     * @return Core\OAuth
     */
    public function oauth()
    {
        $this->oauthSvc ??= new Core\OAuth($this->client);
        return $this->oauthSvc;
    }

    /**
     * Summary of package
     *
     * API: SYNO.Core\Package
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Package
     * @return Core\Package
     */
    public function package()
    {
        $this->packageSvc ??= new Core\Package($this->client);
        return $this->packageSvc;
    }

    /**
     * Summary of personalnotification
     *
     * API: SYNO.Core\PersonalNotification
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\PersonalNotification
     * @return Core\PersonalNotification
     */
    public function personalnotification()
    {
        $this->personalnotificationSvc ??= new Core\PersonalNotification($this->client);
        return $this->personalnotificationSvc;
    }

    /**
     * Summary of polling
     *
     * API: SYNO.Core\Polling
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Polling
     * @return Core\Polling
     */
    public function polling()
    {
        $this->pollingSvc ??= new Core\Polling($this->client);
        return $this->pollingSvc;
    }

    /**
     * Summary of portforwarding
     *
     * API: SYNO.Core\PortForwarding
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\PortForwarding
     * @return Core\PortForwarding
     */
    public function portforwarding()
    {
        $this->portforwardingSvc ??= new Core\PortForwarding($this->client);
        return $this->portforwardingSvc;
    }

    /**
     * Summary of quickconnect
     *
     * API: SYNO.Core\QuickConnect
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\QuickConnect
     * @return Core\QuickConnect
     */
    public function quickconnect()
    {
        $this->quickconnectSvc ??= new Core\QuickConnect($this->client);
        return $this->quickconnectSvc;
    }

    /**
     * Summary of recyclebin
     *
     * API: SYNO.Core\RecycleBin
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\RecycleBin
     * @return Core\RecycleBin
     */
    public function recyclebin()
    {
        $this->recyclebinSvc ??= new Core\RecycleBin($this->client);
        return $this->recyclebinSvc;
    }

    /**
     * Summary of region
     *
     * API: SYNO.Core\Region
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Region
     * @return Core\Region
     */
    public function region()
    {
        $this->regionSvc ??= new Core\Region($this->client);
        return $this->regionSvc;
    }

    /**
     * Summary of report
     *
     * API: SYNO.Core\Report
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Report
     * @return Core\Report
     */
    public function report()
    {
        $this->reportSvc ??= new Core\Report($this->client);
        return $this->reportSvc;
    }

    /**
     * Summary of security
     *
     * API: SYNO.Core\Security
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Security
     * @return Core\Security
     */
    public function security()
    {
        $this->securitySvc ??= new Core\Security($this->client);
        return $this->securitySvc;
    }

    /**
     * Summary of securityscan
     *
     * API: SYNO.Core\SecurityScan
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\SecurityScan
     * @return Core\SecurityScan
     */
    public function securityscan()
    {
        $this->securityscanSvc ??= new Core\SecurityScan($this->client);
        return $this->securityscanSvc;
    }

    /**
     * Summary of service
     *
     * API: SYNO.Core\Service
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Service
     * @return Core\Service
     */
    public function service()
    {
        $this->serviceSvc ??= new Core\Service($this->client);
        return $this->serviceSvc;
    }

    /**
     * Summary of share
     *
     * API: SYNO.Core\Share
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Share
     * @return Core\Share
     */
    public function share()
    {
        $this->shareSvc ??= new Core\Share($this->client);
        return $this->shareSvc;
    }

    /**
     * Summary of sharing
     *
     * API: SYNO.Core\Sharing
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Sharing
     * @return Core\Sharing
     */
    public function sharing()
    {
        $this->sharingSvc ??= new Core\Sharing($this->client);
        return $this->sharingSvc;
    }

    /**
     * Summary of smartblock
     *
     * API: SYNO.Core\SmartBlock
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\SmartBlock
     * @return Core\SmartBlock
     */
    public function smartblock()
    {
        $this->smartblockSvc ??= new Core\SmartBlock($this->client);
        return $this->smartblockSvc;
    }

    /**
     * Summary of supportform
     *
     * API: SYNO.Core\SupportForm
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\SupportForm
     * @return Core\SupportForm
     */
    public function supportform()
    {
        $this->supportformSvc ??= new Core\SupportForm($this->client);
        return $this->supportformSvc;
    }

    /**
     * Summary of syslogclient
     *
     * API: SYNO.Core\SyslogClient
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\SyslogClient
     * @return Core\SyslogClient
     */
    public function syslogclient()
    {
        $this->syslogclientSvc ??= new Core\SyslogClient($this->client);
        return $this->syslogclientSvc;
    }

    /**
     * Summary of system
     *
     * API: SYNO.Core\System
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\System
     * @return Core\System
     */
    public function system()
    {
        $this->systemSvc ??= new Core\System($this->client);
        return $this->systemSvc;
    }

    /**
     * Summary of theme
     *
     * API: SYNO.Core\Theme
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Theme
     * @return Core\Theme
     */
    public function theme()
    {
        $this->themeSvc ??= new Core\Theme($this->client);
        return $this->themeSvc;
    }

    /**
     * Summary of upgrade
     *
     * API: SYNO.Core\Upgrade
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Upgrade
     * @return Core\Upgrade
     */
    public function upgrade()
    {
        $this->upgradeSvc ??= new Core\Upgrade($this->client);
        return $this->upgradeSvc;
    }

    /**
     * Summary of user
     *
     * API: SYNO.Core\User
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\User
     * @return Core\User
     */
    public function user()
    {
        $this->userSvc ??= new Core\User($this->client);
        return $this->userSvc;
    }

    /**
     * Summary of virtualization
     *
     * API: SYNO.Core\Virtualization
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Virtualization
     * @return Core\Virtualization
     */
    public function virtualization()
    {
        $this->virtualizationSvc ??= new Core\Virtualization($this->client);
        return $this->virtualizationSvc;
    }

    /**
     * Summary of web
     *
     * API: SYNO.Core\Web
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core\Web
     * @return Core\Web
     */
    public function web()
    {
        $this->webSvc ??= new Core\Web($this->client);
        return $this->webSvc;
    }

    /**
     * Summary of getAppNotify
     *
     * API method: SYNO.Core.AppNotify get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppNotify-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAppNotify()
    {
        $api = 'AppNotify';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listAppPortal
     *
     * API method: SYNO.Core.AppPortal list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.AppPortal-list.json
     * @return array|bool|string|\stdClass
     */
    public function listAppPortal()
    {
        $api = 'AppPortal';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getBackgroundTask
     *
     * API method: SYNO.Core.BackgroundTask get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.BackgroundTask-get.json
     * @return array|bool|string|\stdClass
     */
    public function getBackgroundTask()
    {
        $api = 'BackgroundTask';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listCurrentConnection
     *
     * API method: SYNO.Core.CurrentConnection list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.CurrentConnection-list.json
     * @return array|bool|string|\stdClass
     */
    public function listCurrentConnection()
    {
        $api = 'CurrentConnection';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDataCollect
     *
     * API method: SYNO.Core.DataCollect get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DataCollect-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDataCollect()
    {
        $api = 'DataCollect';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getDisableAdmin
     *
     * API method: SYNO.Core.DisableAdmin get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.DisableAdmin-get.json
     * @return array|bool|string|\stdClass
     */
    public function getDisableAdmin()
    {
        $api = 'DisableAdmin';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listEventScheduler
     *
     * API method: SYNO.Core.EventScheduler list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.EventScheduler-list.json
     * @return array|bool|string|\stdClass
     */
    public function listEventScheduler()
    {
        $api = 'EventScheduler';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFileHandle
     *
     * API method: SYNO.Core.FileHandle get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileHandle-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFileHandle()
    {
        $api = 'FileHandle';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listFindhost
     *
     * API method: SYNO.Core.Findhost list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Findhost-list.json
     * @return array|bool|string|\stdClass
     */
    public function listFindhost()
    {
        $api = 'Findhost';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listGroup
     *
     * API method: SYNO.Core.Group list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Group-list.json
     * @return array|bool|string|\stdClass
     */
    public function listGroup()
    {
        $api = 'Group';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getGroupSettings
     *
     * API method: SYNO.Core.GroupSettings get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.GroupSettings-get.json
     * @return array|bool|string|\stdClass
     */
    public function getGroupSettings()
    {
        $api = 'GroupSettings';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNetwork
     *
     * API method: SYNO.Core.Network get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Network-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNetwork()
    {
        $api = 'Network';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listPackage
     *
     * API method: SYNO.Core.Package list (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Package-list.json
     * @return array|bool|string|\stdClass
     */
    public function listPackage()
    {
        $api = 'Package';
        $path = static::API_PATH;
        $method = 'list';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getRecycleBin
     *
     * API method: SYNO.Core.RecycleBin get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.RecycleBin-get.json
     * @return array|bool|string|\stdClass
     */
    public function getRecycleBin()
    {
        $api = 'RecycleBin';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listReport
     *
     * API method: SYNO.Core.Report list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Report-list.json
     * @return array|bool|string|\stdClass
     */
    public function listReport()
    {
        $api = 'Report';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSNMP
     *
     * API method: SYNO.Core.SNMP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SNMP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSNMP()
    {
        $api = 'SNMP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getService
     *
     * API method: SYNO.Core.Service get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Service-get.json
     * @return array|bool|string|\stdClass
     */
    public function getService()
    {
        $api = 'Service';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listShare
     *
     * API method: SYNO.Core.Share list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Share-list.json
     * @return array|bool|string|\stdClass
     */
    public function listShare()
    {
        $api = 'Share';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listSharing
     *
     * API method: SYNO.Core.Sharing list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Sharing-list.json
     * @return array|bool|string|\stdClass
     */
    public function listSharing()
    {
        $api = 'Sharing';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSmartBlock
     *
     * API method: SYNO.Core.SmartBlock get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.SmartBlock-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSmartBlock()
    {
        $api = 'SmartBlock';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSynohdpack
     *
     * API method: SYNO.Core.Synohdpack get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Synohdpack-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSynohdpack()
    {
        $api = 'Synohdpack';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getTFTP
     *
     * API method: SYNO.Core.TFTP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.TFTP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getTFTP()
    {
        $api = 'TFTP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getTerminal
     *
     * API method: SYNO.Core.Terminal get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.Terminal-get.json
     * @return array|bool|string|\stdClass
     */
    public function getTerminal()
    {
        $api = 'Terminal';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listUser
     *
     * API method: SYNO.Core.User list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.User-list.json
     * @return array|bool|string|\stdClass
     */
    public function listUser()
    {
        $api = 'User';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getUserSettings
     *
     * API method: SYNO.Core.UserSettings get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.UserSettings-get.json
     * @return array|bool|string|\stdClass
     */
    public function getUserSettings()
    {
        $api = 'UserSettings';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getVolEncKeepKey
     *
     * API method: SYNO.Core.VolEncKeepKey get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.VolEncKeepKey-get.json
     * @return array|bool|string|\stdClass
     */
    public function getVolEncKeepKey()
    {
        $api = 'VolEncKeepKey';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
