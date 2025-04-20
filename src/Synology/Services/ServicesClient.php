<?php

namespace Synology\Services;

use Synology\Applications\GenericClient;

/**
 * Class ServicesClient
 *
 * @package Synology\Services
 */
class ServicesClient extends GenericClient
{
    protected ?API $apiSvc = null;
    protected ?ActiveInsight $activeinsightSvc = null;
    protected ?AudioStation $audiostationSvc = null;
    protected ?Auth $authSvc = null;
    protected ?Backup $backupSvc = null;
    protected ?C2FS $c2fsSvc = null;
    protected ?Cal $calSvc = null;
    protected ?CloudSync $cloudsyncSvc = null;
    protected ?Contacts $contactsSvc = null;
    protected ?Core $coreSvc = null;
    protected ?DR $drSvc = null;
    protected ?DSM $dsmSvc = null;
    protected ?DisasterRecovery $disasterrecoverySvc = null;
    protected ?Docker $dockerSvc = null;
    protected ?DownloadStation $downloadstationSvc = null;
    protected ?DownloadStation2 $downloadstation2Svc = null;
    protected ?FileStation $filestationSvc = null;
    protected ?Finder $finderSvc = null;
    protected ?Foto $fotoSvc = null;
    protected ?FotoTeam $fototeamSvc = null;
    protected ?MediaServer $mediaserverSvc = null;
    protected ?Network $networkSvc = null;
    protected ?NoteStation $notestationSvc = null;
    protected ?OAUTH $oauthSvc = null;
    protected ?Office $officeSvc = null;
    protected ?Package $packageSvc = null;
    protected ?PersonMailAccount $personmailaccountSvc = null;
    protected ?Personal $personalSvc = null;
    protected ?Remote $remoteSvc = null;
    protected ?ResourceMonitor $resourcemonitorSvc = null;
    protected ?S2S $s2sSvc = null;
    protected ?SDS $sdsSvc = null;
    protected ?SecureSignIn $securesigninSvc = null;
    protected ?SecurityAdvisor $securityadvisorSvc = null;
    protected ?Storage $storageSvc = null;
    protected ?SupportService $supportserviceSvc = null;
    protected ?SynologyDrive $synologydriveSvc = null;
    protected ?SynologyDriveShareSync $synologydrivesharesyncSvc = null;
    protected ?TextEditor $texteditorSvc = null;
    protected ?USBCopy $usbcopySvc = null;
    protected ?WebStation $webstationSvc = null;

    /**
     * Summary of api
     *
     * API: SYNO.API
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=API
     * @return API
     */
    public function api()
    {
        $this->apiSvc ??= new API($this);
        return $this->apiSvc;
    }

    /**
     * Summary of activeinsight
     *
     * API: SYNO.ActiveInsight
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ActiveInsight
     * @return ActiveInsight
     */
    public function activeinsight()
    {
        $this->activeinsightSvc ??= new ActiveInsight($this);
        return $this->activeinsightSvc;
    }

    /**
     * Summary of audiostation
     *
     * API: SYNO.AudioStation
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=AudioStation
     * @return AudioStation
     */
    public function audiostation()
    {
        $this->audiostationSvc ??= new AudioStation($this);
        return $this->audiostationSvc;
    }

    /**
     * Summary of auth
     *
     * API: SYNO.Auth
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Auth
     * @return Auth
     */
    public function auth()
    {
        $this->authSvc ??= new Auth($this);
        return $this->authSvc;
    }

    /**
     * Summary of backup
     *
     * API: SYNO.Backup
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Backup
     * @return Backup
     */
    public function backup()
    {
        $this->backupSvc ??= new Backup($this);
        return $this->backupSvc;
    }

    /**
     * Summary of c2fs
     *
     * API: SYNO.C2FS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=C2FS
     * @return C2FS
     */
    public function c2fs()
    {
        $this->c2fsSvc ??= new C2FS($this);
        return $this->c2fsSvc;
    }

    /**
     * Summary of cal
     *
     * API: SYNO.Cal
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Cal
     * @return Cal
     */
    public function cal()
    {
        $this->calSvc ??= new Cal($this);
        return $this->calSvc;
    }

    /**
     * Summary of cloudsync
     *
     * API: SYNO.CloudSync
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=CloudSync
     * @return CloudSync
     */
    public function cloudsync()
    {
        $this->cloudsyncSvc ??= new CloudSync($this);
        return $this->cloudsyncSvc;
    }

    /**
     * Summary of contacts
     *
     * API: SYNO.Contacts
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts
     * @return Contacts
     */
    public function contacts()
    {
        $this->contactsSvc ??= new Contacts($this);
        return $this->contactsSvc;
    }

    /**
     * Summary of core
     *
     * API: SYNO.Core
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core
     * @return Core
     */
    public function core()
    {
        $this->coreSvc ??= new Core($this);
        return $this->coreSvc;
    }

    /**
     * Summary of dr
     *
     * API: SYNO.DR
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DR
     * @return DR
     */
    public function dr()
    {
        $this->drSvc ??= new DR($this);
        return $this->drSvc;
    }

    /**
     * Summary of dsm
     *
     * API: SYNO.DSM
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DSM
     * @return DSM
     */
    public function dsm()
    {
        $this->dsmSvc ??= new DSM($this);
        return $this->dsmSvc;
    }

    /**
     * Summary of disasterrecovery
     *
     * API: SYNO.DisasterRecovery
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DisasterRecovery
     * @return DisasterRecovery
     */
    public function disasterrecovery()
    {
        $this->disasterrecoverySvc ??= new DisasterRecovery($this);
        return $this->disasterrecoverySvc;
    }

    /**
     * Summary of docker
     *
     * API: SYNO.Docker
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Docker
     * @return Docker
     */
    public function docker()
    {
        $this->dockerSvc ??= new Docker($this);
        return $this->dockerSvc;
    }

    /**
     * Summary of downloadstation
     *
     * API: SYNO.DownloadStation
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation
     * @return DownloadStation
     */
    public function downloadstation()
    {
        $this->downloadstationSvc ??= new DownloadStation($this);
        return $this->downloadstationSvc;
    }

    /**
     * Summary of downloadstation2
     *
     * API: SYNO.DownloadStation2
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DownloadStation2
     * @return DownloadStation2
     */
    public function downloadstation2()
    {
        $this->downloadstation2Svc ??= new DownloadStation2($this);
        return $this->downloadstation2Svc;
    }

    /**
     * Summary of filestation
     *
     * API: SYNO.FileStation
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FileStation
     * @return FileStation
     */
    public function filestation()
    {
        $this->filestationSvc ??= new FileStation($this);
        return $this->filestationSvc;
    }

    /**
     * Summary of finder
     *
     * API: SYNO.Finder
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Finder
     * @return Finder
     */
    public function finder()
    {
        $this->finderSvc ??= new Finder($this);
        return $this->finderSvc;
    }

    /**
     * Summary of foto
     *
     * API: SYNO.Foto
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Foto
     * @return Foto
     */
    public function foto()
    {
        $this->fotoSvc ??= new Foto($this);
        return $this->fotoSvc;
    }

    /**
     * Summary of fototeam
     *
     * API: SYNO.FotoTeam
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=FotoTeam
     * @return FotoTeam
     */
    public function fototeam()
    {
        $this->fototeamSvc ??= new FotoTeam($this);
        return $this->fototeamSvc;
    }

    /**
     * Summary of mediaserver
     *
     * API: SYNO.MediaServer
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=MediaServer
     * @return MediaServer
     */
    public function mediaserver()
    {
        $this->mediaserverSvc ??= new MediaServer($this);
        return $this->mediaserverSvc;
    }

    /**
     * Summary of network
     *
     * API: SYNO.Network
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Network
     * @return Network
     */
    public function network()
    {
        $this->networkSvc ??= new Network($this);
        return $this->networkSvc;
    }

    /**
     * Summary of notestation
     *
     * API: SYNO.NoteStation
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation
     * @return NoteStation
     */
    public function notestation()
    {
        $this->notestationSvc ??= new NoteStation($this);
        return $this->notestationSvc;
    }

    /**
     * Summary of oauth
     *
     * API: SYNO.OAUTH
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=OAUTH
     * @return OAUTH
     */
    public function oauth()
    {
        $this->oauthSvc ??= new OAUTH($this);
        return $this->oauthSvc;
    }

    /**
     * Summary of office
     *
     * API: SYNO.Office
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Office
     * @return Office
     */
    public function office()
    {
        $this->officeSvc ??= new Office($this);
        return $this->officeSvc;
    }

    /**
     * Summary of package
     *
     * API: SYNO.Package
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Package
     * @return Package
     */
    public function package()
    {
        $this->packageSvc ??= new Package($this);
        return $this->packageSvc;
    }

    /**
     * Summary of personmailaccount
     *
     * API: SYNO.PersonMailAccount
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=PersonMailAccount
     * @return PersonMailAccount
     */
    public function personmailaccount()
    {
        $this->personmailaccountSvc ??= new PersonMailAccount($this);
        return $this->personmailaccountSvc;
    }

    /**
     * Summary of personal
     *
     * API: SYNO.Personal
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Personal
     * @return Personal
     */
    public function personal()
    {
        $this->personalSvc ??= new Personal($this);
        return $this->personalSvc;
    }

    /**
     * Summary of remote
     *
     * API: SYNO.Remote
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Remote
     * @return Remote
     */
    public function remote()
    {
        $this->remoteSvc ??= new Remote($this);
        return $this->remoteSvc;
    }

    /**
     * Summary of resourcemonitor
     *
     * API: SYNO.ResourceMonitor
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=ResourceMonitor
     * @return ResourceMonitor
     */
    public function resourcemonitor()
    {
        $this->resourcemonitorSvc ??= new ResourceMonitor($this);
        return $this->resourcemonitorSvc;
    }

    /**
     * Summary of s2s
     *
     * API: SYNO.S2S
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=S2S
     * @return S2S
     */
    public function s2s()
    {
        $this->s2sSvc ??= new S2S($this);
        return $this->s2sSvc;
    }

    /**
     * Summary of sds
     *
     * API: SYNO.SDS
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SDS
     * @return SDS
     */
    public function sds()
    {
        $this->sdsSvc ??= new SDS($this);
        return $this->sdsSvc;
    }

    /**
     * Summary of securesignin
     *
     * API: SYNO.SecureSignIn
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn
     * @return SecureSignIn
     */
    public function securesignin()
    {
        $this->securesigninSvc ??= new SecureSignIn($this);
        return $this->securesigninSvc;
    }

    /**
     * Summary of securityadvisor
     *
     * API: SYNO.SecurityAdvisor
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecurityAdvisor
     * @return SecurityAdvisor
     */
    public function securityadvisor()
    {
        $this->securityadvisorSvc ??= new SecurityAdvisor($this);
        return $this->securityadvisorSvc;
    }

    /**
     * Summary of storage
     *
     * API: SYNO.Storage
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Storage
     * @return Storage
     */
    public function storage()
    {
        $this->storageSvc ??= new Storage($this);
        return $this->storageSvc;
    }

    /**
     * Summary of supportservice
     *
     * API: SYNO.SupportService
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SupportService
     * @return SupportService
     */
    public function supportservice()
    {
        $this->supportserviceSvc ??= new SupportService($this);
        return $this->supportserviceSvc;
    }

    /**
     * Summary of synologydrive
     *
     * API: SYNO.SynologyDrive
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDrive
     * @return SynologyDrive
     */
    public function synologydrive()
    {
        $this->synologydriveSvc ??= new SynologyDrive($this);
        return $this->synologydriveSvc;
    }

    /**
     * Summary of synologydrivesharesync
     *
     * API: SYNO.SynologyDriveShareSync
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SynologyDriveShareSync
     * @return SynologyDriveShareSync
     */
    public function synologydrivesharesync()
    {
        $this->synologydrivesharesyncSvc ??= new SynologyDriveShareSync($this);
        return $this->synologydrivesharesyncSvc;
    }

    /**
     * Summary of texteditor
     *
     * API: SYNO.TextEditor
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=TextEditor
     * @return TextEditor
     */
    public function texteditor()
    {
        $this->texteditorSvc ??= new TextEditor($this);
        return $this->texteditorSvc;
    }

    /**
     * Summary of usbcopy
     *
     * API: SYNO.USBCopy
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=USBCopy
     * @return USBCopy
     */
    public function usbcopy()
    {
        $this->usbcopySvc ??= new USBCopy($this);
        return $this->usbcopySvc;
    }

    /**
     * Summary of webstation
     *
     * API: SYNO.WebStation
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=WebStation
     * @return WebStation
     */
    public function webstation()
    {
        $this->webstationSvc ??= new WebStation($this);
        return $this->webstationSvc;
    }
}
