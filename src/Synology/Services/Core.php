<?php

namespace Synology\Services;

/**
 * Class Core - created automatically by ServiceGenerator
 *
 * API: SYNO.Core
 * ```
 * $result = $syno->core()->getBackgroundTask();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core
 * @package Synology\Services
 */
class Core extends BaseService
{
    public const API_SERVICE_NAME = 'Core';
    public const API_VERSION = 1;
    protected ?Core\ActionPriv $actionprivSvc = null;
    protected ?Core\AppNotify $appnotifySvc = null;
    protected ?Core\AppPortal $appportalSvc = null;
    protected ?Core\AppPriv $appprivSvc = null;
    protected ?Core\BandwidthControl $bandwidthcontrolSvc = null;
    protected ?Core\CMS $cmsSvc = null;
    protected ?Core\Certificate $certificateSvc = null;
    protected ?Core\CurrentConnection $currentconnectionSvc = null;
    protected ?Core\DDNS $ddnsSvc = null;
    protected ?Core\DSMNotify $dsmnotifySvc = null;
    protected ?Core\DataCollect $datacollectSvc = null;
    protected ?Core\Desktop $desktopSvc = null;
    protected ?Core\Directory $directorySvc = null;
    protected ?Core\DisableAdmin $disableadminSvc = null;
    protected ?Core\EW $ewSvc = null;
    protected ?Core\EventScheduler $eventschedulerSvc = null;
    protected ?Core\ExternalDevice $externaldeviceSvc = null;
    protected ?Core\Factory $factorySvc = null;
    protected ?Core\FileHandle $filehandleSvc = null;
    protected ?Core\FileServ $fileservSvc = null;
    protected ?Core\Group $groupSvc = null;
    protected ?Core\GroupSettings $groupsettingsSvc = null;
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
    protected ?Core\SNMP $snmpSvc = null;
    protected ?Core\Security $securitySvc = null;
    protected ?Core\SecurityScan $securityscanSvc = null;
    protected ?Core\Service $serviceSvc = null;
    protected ?Core\Share $shareSvc = null;
    protected ?Core\Sharing $sharingSvc = null;
    protected ?Core\SmartBlock $smartblockSvc = null;
    protected ?Core\SupportForm $supportformSvc = null;
    protected ?Core\Synohdpack $synohdpackSvc = null;
    protected ?Core\SyslogClient $syslogclientSvc = null;
    protected ?Core\System $systemSvc = null;
    protected ?Core\TFTP $tftpSvc = null;
    protected ?Core\Terminal $terminalSvc = null;
    protected ?Core\Theme $themeSvc = null;
    protected ?Core\Upgrade $upgradeSvc = null;
    protected ?Core\User $userSvc = null;
    protected ?Core\UserSettings $usersettingsSvc = null;
    protected ?Core\Virtualization $virtualizationSvc = null;
    protected ?Core\VolEncKeepKey $volenckeepkeySvc = null;
    protected ?Core\Web $webSvc = null;

    /**
     * Summary of actionpriv
     *
     * API: SYNO.Core.ActionPriv
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.ActionPriv
     * @return Core\ActionPriv
     */
    public function actionpriv()
    {
        $this->actionprivSvc ??= new Core\ActionPriv($this->client);
        return $this->actionprivSvc;
    }

    /**
     * Summary of appnotify
     *
     * API: SYNO.Core.AppNotify
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.AppNotify
     * @return Core\AppNotify
     */
    public function appnotify()
    {
        $this->appnotifySvc ??= new Core\AppNotify($this->client);
        return $this->appnotifySvc;
    }

    /**
     * Summary of appportal
     *
     * API: SYNO.Core.AppPortal
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.AppPortal
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
     * API: SYNO.Core.AppPriv
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.AppPriv
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
     * API: SYNO.Core.BandwidthControl
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.BandwidthControl
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
     * API: SYNO.Core.CMS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.CMS
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
     * API: SYNO.Core.Certificate
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Certificate
     * @return Core\Certificate
     */
    public function certificate()
    {
        $this->certificateSvc ??= new Core\Certificate($this->client);
        return $this->certificateSvc;
    }

    /**
     * Summary of currentconnection
     *
     * API: SYNO.Core.CurrentConnection
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.CurrentConnection
     * @return Core\CurrentConnection
     */
    public function currentconnection()
    {
        $this->currentconnectionSvc ??= new Core\CurrentConnection($this->client);
        return $this->currentconnectionSvc;
    }

    /**
     * Summary of ddns
     *
     * API: SYNO.Core.DDNS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DDNS
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
     * API: SYNO.Core.DSMNotify
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DSMNotify
     * @return Core\DSMNotify
     */
    public function dsmnotify()
    {
        $this->dsmnotifySvc ??= new Core\DSMNotify($this->client);
        return $this->dsmnotifySvc;
    }

    /**
     * Summary of datacollect
     *
     * API: SYNO.Core.DataCollect
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DataCollect
     * @return Core\DataCollect
     */
    public function datacollect()
    {
        $this->datacollectSvc ??= new Core\DataCollect($this->client);
        return $this->datacollectSvc;
    }

    /**
     * Summary of desktop
     *
     * API: SYNO.Core.Desktop
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Desktop
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
     * API: SYNO.Core.Directory
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Directory
     * @return Core\Directory
     */
    public function directory()
    {
        $this->directorySvc ??= new Core\Directory($this->client);
        return $this->directorySvc;
    }

    /**
     * Summary of disableadmin
     *
     * API: SYNO.Core.DisableAdmin
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.DisableAdmin
     * @return Core\DisableAdmin
     */
    public function disableadmin()
    {
        $this->disableadminSvc ??= new Core\DisableAdmin($this->client);
        return $this->disableadminSvc;
    }

    /**
     * Summary of ew
     *
     * API: SYNO.Core.EW
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.EW
     * @return Core\EW
     */
    public function ew()
    {
        $this->ewSvc ??= new Core\EW($this->client);
        return $this->ewSvc;
    }

    /**
     * Summary of eventscheduler
     *
     * API: SYNO.Core.EventScheduler
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.EventScheduler
     * @return Core\EventScheduler
     */
    public function eventscheduler()
    {
        $this->eventschedulerSvc ??= new Core\EventScheduler($this->client);
        return $this->eventschedulerSvc;
    }

    /**
     * Summary of externaldevice
     *
     * API: SYNO.Core.ExternalDevice
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.ExternalDevice
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
     * API: SYNO.Core.Factory
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Factory
     * @return Core\Factory
     */
    public function factory()
    {
        $this->factorySvc ??= new Core\Factory($this->client);
        return $this->factorySvc;
    }

    /**
     * Summary of filehandle
     *
     * API: SYNO.Core.FileHandle
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.FileHandle
     * @return Core\FileHandle
     */
    public function filehandle()
    {
        $this->filehandleSvc ??= new Core\FileHandle($this->client);
        return $this->filehandleSvc;
    }

    /**
     * Summary of fileserv
     *
     * API: SYNO.Core.FileServ
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.FileServ
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
     * API: SYNO.Core.Group
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Group
     * @return Core\Group
     */
    public function group()
    {
        $this->groupSvc ??= new Core\Group($this->client);
        return $this->groupSvc;
    }

    /**
     * Summary of groupsettings
     *
     * API: SYNO.Core.GroupSettings
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.GroupSettings
     * @return Core\GroupSettings
     */
    public function groupsettings()
    {
        $this->groupsettingsSvc ??= new Core\GroupSettings($this->client);
        return $this->groupsettingsSvc;
    }

    /**
     * Summary of hardware
     *
     * API: SYNO.Core.Hardware
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Hardware
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
     * API: SYNO.Core.ISCSI
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.ISCSI
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
     * API: SYNO.Core.MediaIndexing
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.MediaIndexing
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
     * API: SYNO.Core.MyDSCenter
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.MyDSCenter
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
     * API: SYNO.Core.Network
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Network
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
     * API: SYNO.Core.Notification
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Notification
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
     * API: SYNO.Core.OAuth
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.OAuth
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
     * API: SYNO.Core.Package
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Package
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
     * API: SYNO.Core.PersonalNotification
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.PersonalNotification
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
     * API: SYNO.Core.Polling
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Polling
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
     * API: SYNO.Core.PortForwarding
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.PortForwarding
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
     * API: SYNO.Core.QuickConnect
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.QuickConnect
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
     * API: SYNO.Core.RecycleBin
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.RecycleBin
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
     * API: SYNO.Core.Region
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Region
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
     * API: SYNO.Core.Report
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Report
     * @return Core\Report
     */
    public function report()
    {
        $this->reportSvc ??= new Core\Report($this->client);
        return $this->reportSvc;
    }

    /**
     * Summary of snmp
     *
     * API: SYNO.Core.SNMP
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SNMP
     * @return Core\SNMP
     */
    public function snmp()
    {
        $this->snmpSvc ??= new Core\SNMP($this->client);
        return $this->snmpSvc;
    }

    /**
     * Summary of security
     *
     * API: SYNO.Core.Security
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Security
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
     * API: SYNO.Core.SecurityScan
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SecurityScan
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
     * API: SYNO.Core.Service
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Service
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
     * API: SYNO.Core.Share
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Share
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
     * API: SYNO.Core.Sharing
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Sharing
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
     * API: SYNO.Core.SmartBlock
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SmartBlock
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
     * API: SYNO.Core.SupportForm
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SupportForm
     * @return Core\SupportForm
     */
    public function supportform()
    {
        $this->supportformSvc ??= new Core\SupportForm($this->client);
        return $this->supportformSvc;
    }

    /**
     * Summary of synohdpack
     *
     * API: SYNO.Core.Synohdpack
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Synohdpack
     * @return Core\Synohdpack
     */
    public function synohdpack()
    {
        $this->synohdpackSvc ??= new Core\Synohdpack($this->client);
        return $this->synohdpackSvc;
    }

    /**
     * Summary of syslogclient
     *
     * API: SYNO.Core.SyslogClient
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.SyslogClient
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
     * API: SYNO.Core.System
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.System
     * @return Core\System
     */
    public function system()
    {
        $this->systemSvc ??= new Core\System($this->client);
        return $this->systemSvc;
    }

    /**
     * Summary of tftp
     *
     * API: SYNO.Core.TFTP
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.TFTP
     * @return Core\TFTP
     */
    public function tftp()
    {
        $this->tftpSvc ??= new Core\TFTP($this->client);
        return $this->tftpSvc;
    }

    /**
     * Summary of terminal
     *
     * API: SYNO.Core.Terminal
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Terminal
     * @return Core\Terminal
     */
    public function terminal()
    {
        $this->terminalSvc ??= new Core\Terminal($this->client);
        return $this->terminalSvc;
    }

    /**
     * Summary of theme
     *
     * API: SYNO.Core.Theme
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Theme
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
     * API: SYNO.Core.Upgrade
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Upgrade
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
     * API: SYNO.Core.User
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.User
     * @return Core\User
     */
    public function user()
    {
        $this->userSvc ??= new Core\User($this->client);
        return $this->userSvc;
    }

    /**
     * Summary of usersettings
     *
     * API: SYNO.Core.UserSettings
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.UserSettings
     * @return Core\UserSettings
     */
    public function usersettings()
    {
        $this->usersettingsSvc ??= new Core\UserSettings($this->client);
        return $this->usersettingsSvc;
    }

    /**
     * Summary of virtualization
     *
     * API: SYNO.Core.Virtualization
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Virtualization
     * @return Core\Virtualization
     */
    public function virtualization()
    {
        $this->virtualizationSvc ??= new Core\Virtualization($this->client);
        return $this->virtualizationSvc;
    }

    /**
     * Summary of volenckeepkey
     *
     * API: SYNO.Core.VolEncKeepKey
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.VolEncKeepKey
     * @return Core\VolEncKeepKey
     */
    public function volenckeepkey()
    {
        $this->volenckeepkeySvc ??= new Core\VolEncKeepKey($this->client);
        return $this->volenckeepkeySvc;
    }

    /**
     * Summary of web
     *
     * API: SYNO.Core.Web
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.Web
     * @return Core\Web
     */
    public function web()
    {
        $this->webSvc ??= new Core\Web($this->client);
        return $this->webSvc;
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
}
