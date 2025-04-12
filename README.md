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

The OpenAPI files below use a path with the api, version, method + session id parameters for each API method, that is mapped to the Synology API by a basic [REST API](./tools/rest.php) script. Any special additional parameters needed for a particular API method are *not* taken into account here (except for login).

OpenAPI (Swagger) files by service:

- [ACEEditor](./tools/swagger/ACEEditor.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ACEEditor)
- [AME](./tools/swagger/AME.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=AME)
- [API](./tools/swagger/API.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=API)
- [ActiveInsight](./tools/swagger/ActiveInsight.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ActiveInsight)
- [AudioPlayer](./tools/swagger/AudioPlayer.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=AudioPlayer)
- [AudioStation](./tools/swagger/AudioStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=AudioStation)
- [Auth](./tools/swagger/Auth.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Auth)
- [Aviary](./tools/swagger/Aviary.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Aviary)
- [Backup](./tools/swagger/Backup.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Backup)
- [C2FS](./tools/swagger/C2FS.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=C2FS)
- [Cal](./tools/swagger/Cal.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Cal)
- [CloudStation](./tools/swagger/CloudStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=CloudStation)
- [CloudSync](./tools/swagger/CloudSync.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=CloudSync)
- [Contacts](./tools/swagger/Contacts.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Contacts)
- [Core](./tools/swagger/Core.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Core)
- [DR](./tools/swagger/DR.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DR)
- [DSM](./tools/swagger/DSM.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DSM)
- [DTV](./tools/swagger/DTV.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DTV)
- [Default](./tools/swagger/Default.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Default)
- [DisasterRecovery](./tools/swagger/DisasterRecovery.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DisasterRecovery)
- [Docker](./tools/swagger/Docker.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Docker)
- [DownloadStation](./tools/swagger/DownloadStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DownloadStation)
- [DownloadStation2](./tools/swagger/DownloadStation2.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DownloadStation2)
- [Entry](./tools/swagger/Entry.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Entry)
- [FileStation](./tools/swagger/FileStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=FileStation)
- [Finder](./tools/swagger/Finder.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Finder)
- [FolderSharing](./tools/swagger/FolderSharing.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=FolderSharing)
- [Foto](./tools/swagger/Foto.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Foto)
- [FotoTeam](./tools/swagger/FotoTeam.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=FotoTeam)
- [License](./tools/swagger/License.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=License)
- [Lunbackup](./tools/swagger/Lunbackup.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Lunbackup)
- [MariaDB10](./tools/swagger/MariaDB10.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=MariaDB10)
- [MediaServer](./tools/swagger/MediaServer.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=MediaServer)
- [Network](./tools/swagger/Network.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Network)
- [NoteStation](./tools/swagger/NoteStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=NoteStation)
- [OAUTH](./tools/swagger/OAUTH.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=OAUTH)
- [Office](./tools/swagger/Office.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Office)
- [Package](./tools/swagger/Package.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Package)
- [PersonMailAccount](./tools/swagger/PersonMailAccount.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=PersonMailAccount)
- [Personal](./tools/swagger/Personal.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Personal)
- [PhotoStation](./tools/swagger/PhotoStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=PhotoStation)
- [Remote](./tools/swagger/Remote.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Remote)
- [ResourceMonitor](./tools/swagger/ResourceMonitor.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ResourceMonitor)
- [S2S](./tools/swagger/S2S.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=S2S)
- [SAS](./tools/swagger/SAS.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SAS)
- [SDS](./tools/swagger/SDS.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SDS)
- [SVSEXT](./tools/swagger/SVSEXT.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SVSEXT)
- [SecureSignIn](./tools/swagger/SecureSignIn.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SecureSignIn)
- [SecurityAdvisor](./tools/swagger/SecurityAdvisor.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SecurityAdvisor)
- [ShareLink](./tools/swagger/ShareLink.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ShareLink)
- [Snap](./tools/swagger/Snap.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Snap)
- [SocialAccount](./tools/swagger/SocialAccount.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SocialAccount)
- [Storage](./tools/swagger/Storage.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Storage)
- [SupportService](./tools/swagger/SupportService.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SupportService)
- [SurveillanceStation](./tools/swagger/SurveillanceStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SurveillanceStation)
- [SynologyDrive](./tools/swagger/SynologyDrive.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SynologyDrive)
- [SynologyDriveShareSync](./tools/swagger/SynologyDriveShareSync.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SynologyDriveShareSync)
- [TextEditor](./tools/swagger/TextEditor.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=TextEditor)
- [USBCopy](./tools/swagger/USBCopy.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=USBCopy)
- [Utils](./tools/swagger/Utils.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Utils)
- [VideoController](./tools/swagger/VideoController.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoController)
- [VideoPlayer](./tools/swagger/VideoPlayer.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoPlayer)
- [VideoStataion](./tools/swagger/VideoStataion.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoStataion)
- [VideoStation](./tools/swagger/VideoStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoStation)
- [VideoStation2](./tools/swagger/VideoStation2.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoStation2)
- [WebRTC](./tools/swagger/WebRTC.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=WebRTC)
- [WebStation](./tools/swagger/WebStation.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=WebStation)

OpenAPI (Swagger) files combined:

- [path](./tools/swagger/path.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=path)
- [query](./tools/swagger/query.yaml) [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=query)

