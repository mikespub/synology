Synology PHP
=================

This is an update of ``https://github.com/zzarbi/synology`` with new code standards and namespaces.

You will find some additional [Tools](./tools/) here as well, including a [Synology Web API Explorer](https://github.mikespub.net/synology/tools/index.html) using a basic [REST API](./tools/rest.php) interface and generated swagger files.

This is a PHP Library that consume Synology APIs

* SYNO.Api :
    * connect
    * disconnect
    * getAvailableApi

* SYNO.SynologyDriveServer :
    * connect
    * disconnect
    * getConnection
    * getShare
    * getLog

* SYNO.CloudStationServer :
    * connect
    * disconnect
    * getConnection
    * getLog

* SYNO.DownloadStation :
    * connect
    * disconnect
    * getInfo
    * getConfig
    * setConfig
    * getScheduleConfig
    * setScheduleConfig
    * getTaskList
    * getTaskInfo
    * addTask
    * deleteTask
    * pauseTask
    * resumeTask
    * getStatistics
    * getRssList
    * refreshRss
    * getRssFeedList

* SYNO.AudioStation:
    * connect
    * disconnect
    * getInfo
    * getObjects
    * getObjectInfo
    * getObjectCover
    * searchSong
    
* SYNO.FileStation:
    * connect
    * disconnect
    * getInfo
    * getShares
    * getObjectInfo
    * getList
    * search
    * download
    * createFolder
    
* SYNO.VideoStation:
    * connect
    * disconnect
    * getInfo
    * getObjects
    * searchObject
    * listObjects
    
* SYNO.SurveillanceStation:
    * connect
    * disconnect
    * getInfo
    * getCameraList
    * getHomeModeInfo
    * switchHomeMode

Usage for Synology Api:
```php
$synology = new Synology\Api('192.168.10.5', 5000, 'http', 1);
//$synology->activateDebug();
$synology->connect('admin', 'xxxx');
print_r($synology->getAvailableApi());
``` 
 
Usage for AudioStation:
```php
$synology = new Synology\Applications\AudioStation('192.168.10.5', 5000, 'http', 1);
$synology->connect('admin', 'xxxx');
print_r($synology->getInfo());
```

Synology Web API Explorer
-------------------------

OpenAPI (Swagger) files by service:

- [ACEEditor](./tools/swagger/ACEEditor.yaml)
- [AME](./tools/swagger/AME.yaml)
- [API](./tools/swagger/API.yaml)
- [ActiveInsight](./tools/swagger/ActiveInsight.yaml)
- [AudioPlayer](./tools/swagger/AudioPlayer.yaml)
- [AudioStation](./tools/swagger/AudioStation.yaml)
- [Auth](./tools/swagger/Auth.yaml)
- [Aviary](./tools/swagger/Aviary.yaml)
- [Backup](./tools/swagger/Backup.yaml)
- [C2FS](./tools/swagger/C2FS.yaml)
- [Cal](./tools/swagger/Cal.yaml)
- [CloudStation](./tools/swagger/CloudStation.yaml)
- [CloudSync](./tools/swagger/CloudSync.yaml)
- [Contacts](./tools/swagger/Contacts.yaml)
- [Core](./tools/swagger/Core.yaml)
- [DR](./tools/swagger/DR.yaml)
- [DSM](./tools/swagger/DSM.yaml)
- [DTV](./tools/swagger/DTV.yaml)
- [Default](./tools/swagger/Default.yaml)
- [DisasterRecovery](./tools/swagger/DisasterRecovery.yaml)
- [Docker](./tools/swagger/Docker.yaml)
- [DownloadStation](./tools/swagger/DownloadStation.yaml)
- [DownloadStation2](./tools/swagger/DownloadStation2.yaml)
- [Entry](./tools/swagger/Entry.yaml)
- [FileStation](./tools/swagger/FileStation.yaml)
- [Finder](./tools/swagger/Finder.yaml)
- [FolderSharing](./tools/swagger/FolderSharing.yaml)
- [Foto](./tools/swagger/Foto.yaml)
- [FotoTeam](./tools/swagger/FotoTeam.yaml)
- [License](./tools/swagger/License.yaml)
- [Lunbackup](./tools/swagger/Lunbackup.yaml)
- [MariaDB10](./tools/swagger/MariaDB10.yaml)
- [MediaServer](./tools/swagger/MediaServer.yaml)
- [Network](./tools/swagger/Network.yaml)
- [NoteStation](./tools/swagger/NoteStation.yaml)
- [OAUTH](./tools/swagger/OAUTH.yaml)
- [Office](./tools/swagger/Office.yaml)
- [Package](./tools/swagger/Package.yaml)
- [PersonMailAccount](./tools/swagger/PersonMailAccount.yaml)
- [Personal](./tools/swagger/Personal.yaml)
- [PhotoStation](./tools/swagger/PhotoStation.yaml)
- [Remote](./tools/swagger/Remote.yaml)
- [ResourceMonitor](./tools/swagger/ResourceMonitor.yaml)
- [S2S](./tools/swagger/S2S.yaml)
- [SAS](./tools/swagger/SAS.yaml)
- [SDS](./tools/swagger/SDS.yaml)
- [SVSEXT](./tools/swagger/SVSEXT.yaml)
- [SecureSignIn](./tools/swagger/SecureSignIn.yaml)
- [SecurityAdvisor](./tools/swagger/SecurityAdvisor.yaml)
- [ShareLink](./tools/swagger/ShareLink.yaml)
- [Snap](./tools/swagger/Snap.yaml)
- [SocialAccount](./tools/swagger/SocialAccount.yaml)
- [Storage](./tools/swagger/Storage.yaml)
- [SupportService](./tools/swagger/SupportService.yaml)
- [SurveillanceStation](./tools/swagger/SurveillanceStation.yaml)
- [SynologyDrive](./tools/swagger/SynologyDrive.yaml)
- [SynologyDriveShareSync](./tools/swagger/SynologyDriveShareSync.yaml)
- [TextEditor](./tools/swagger/TextEditor.yaml)
- [USBCopy](./tools/swagger/USBCopy.yaml)
- [Utils](./tools/swagger/Utils.yaml)
- [VideoController](./tools/swagger/VideoController.yaml)
- [VideoPlayer](./tools/swagger/VideoPlayer.yaml)
- [VideoStataion](./tools/swagger/VideoStataion.yaml)
- [VideoStation](./tools/swagger/VideoStation.yaml)
- [VideoStation2](./tools/swagger/VideoStation2.yaml)
- [WebRTC](./tools/swagger/WebRTC.yaml)
- [WebStation](./tools/swagger/WebStation.yaml)

OpenAPI (Swagger) files combined:

- [path](./tools/swagger/path.yaml)
- [query](./tools/swagger/query.yaml)

