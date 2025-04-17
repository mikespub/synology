# Synology PHP

This is an update of ``https://github.com/zzarbi/synology`` with new code standards and namespaces.

You will find some additional [Tools](./tools/) here as well, including a [Synology Web API Explorer](https://github.mikespub.net/synology/tools/index.html) using a basic [REST API](./tools/rest.php) interface and generated OpenAPI files.

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

Usage for GenericClient:
```php
use Synology\Applications\ClientFactory;

$synology = ClientFactory::getGeneric($service, '192.168.10.5', 5001, 'https');
$synology->connect('admin', '****');
// use generic client to call any api method
$result = $synology->call($api, $path, $method, $params, $version);
```

## Synology Web API Explorer

### OpenAPI files by service

The OpenAPI files below use a path with the api, version, method + session id parameters for each API method, that is mapped to the Synology API by a basic [REST API](./tools/rest.php) script. Any special additional parameters needed for a particular API method are *not* taken into account here (except for login).

- [ACEEditor](./tools/openapi/ACEEditor.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ACEEditor)
- [AME](./tools/openapi/AME.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=AME)
- [API](./tools/openapi/API.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=API)
- [ActiveInsight](./tools/openapi/ActiveInsight.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ActiveInsight)
- [AudioPlayer](./tools/openapi/AudioPlayer.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=AudioPlayer)
- [AudioStation](./tools/openapi/AudioStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=AudioStation)
- [Auth](./tools/openapi/Auth.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Auth)
- [Aviary](./tools/openapi/Aviary.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Aviary)
- [Backup](./tools/openapi/Backup.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Backup)
- [C2FS](./tools/openapi/C2FS.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=C2FS)
- [Cal](./tools/openapi/Cal.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Cal)
- [CloudStation](./tools/openapi/CloudStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=CloudStation)
- [CloudSync](./tools/openapi/CloudSync.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=CloudSync)
- [Contacts](./tools/openapi/Contacts.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Contacts)
- [Core](./tools/openapi/Core.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Core)
- [DR](./tools/openapi/DR.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DR)
- [DSM](./tools/openapi/DSM.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DSM)
- [DTV](./tools/openapi/DTV.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DTV)
- [Default](./tools/openapi/Default.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Default)
- [DisasterRecovery](./tools/openapi/DisasterRecovery.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DisasterRecovery)
- [Docker](./tools/openapi/Docker.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Docker)
- [DownloadStation](./tools/openapi/DownloadStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DownloadStation)
- [DownloadStation2](./tools/openapi/DownloadStation2.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=DownloadStation2)
- [Entry](./tools/openapi/Entry.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Entry)
- [FileStation](./tools/openapi/FileStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=FileStation)
- [Finder](./tools/openapi/Finder.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Finder)
- [FolderSharing](./tools/openapi/FolderSharing.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=FolderSharing)
- [Foto](./tools/openapi/Foto.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Foto)
- [FotoTeam](./tools/openapi/FotoTeam.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=FotoTeam)
- [License](./tools/openapi/License.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=License)
- [Lunbackup](./tools/openapi/Lunbackup.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Lunbackup)
- [MariaDB10](./tools/openapi/MariaDB10.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=MariaDB10)
- [MediaServer](./tools/openapi/MediaServer.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=MediaServer)
- [Network](./tools/openapi/Network.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Network)
- [NoteStation](./tools/openapi/NoteStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=NoteStation)
- [OAUTH](./tools/openapi/OAUTH.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=OAUTH)
- [Office](./tools/openapi/Office.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Office)
- [Package](./tools/openapi/Package.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Package)
- [PersonMailAccount](./tools/openapi/PersonMailAccount.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=PersonMailAccount)
- [Personal](./tools/openapi/Personal.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Personal)
- [PhotoStation](./tools/openapi/PhotoStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=PhotoStation)
- [Remote](./tools/openapi/Remote.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Remote)
- [ResourceMonitor](./tools/openapi/ResourceMonitor.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ResourceMonitor)
- [S2S](./tools/openapi/S2S.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=S2S)
- [SAS](./tools/openapi/SAS.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SAS)
- [SDS](./tools/openapi/SDS.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SDS)
- [SVSEXT](./tools/openapi/SVSEXT.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SVSEXT)
- [SecureSignIn](./tools/openapi/SecureSignIn.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SecureSignIn)
- [SecurityAdvisor](./tools/openapi/SecurityAdvisor.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SecurityAdvisor)
- [ShareLink](./tools/openapi/ShareLink.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=ShareLink)
- [Snap](./tools/openapi/Snap.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Snap)
- [SocialAccount](./tools/openapi/SocialAccount.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SocialAccount)
- [Storage](./tools/openapi/Storage.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Storage)
- [SupportService](./tools/openapi/SupportService.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SupportService)
- [SurveillanceStation](./tools/openapi/SurveillanceStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SurveillanceStation)
- [SynologyDrive](./tools/openapi/SynologyDrive.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SynologyDrive)
- [SynologyDriveShareSync](./tools/openapi/SynologyDriveShareSync.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=SynologyDriveShareSync)
- [TextEditor](./tools/openapi/TextEditor.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=TextEditor)
- [USBCopy](./tools/openapi/USBCopy.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=USBCopy)
- [Utils](./tools/openapi/Utils.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Utils)
- [VideoController](./tools/openapi/VideoController.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoController)
- [VideoPlayer](./tools/openapi/VideoPlayer.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoPlayer)
- [VideoStataion](./tools/openapi/VideoStataion.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoStataion)
- [VideoStation](./tools/openapi/VideoStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoStation)
- [VideoStation2](./tools/openapi/VideoStation2.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=VideoStation2)
- [WebRTC](./tools/openapi/WebRTC.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=WebRTC)
- [WebStation](./tools/openapi/WebStation.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=WebStation)

### OpenAPI files combined

The OpenAPI files below combine all APIs above into a single file. There are two versions of the OpenAPI file available, one using short urls with query parameters, and the other specifying the complete path including the 4 standard parameters for each API method. Any special additional parameters needed for a particular API method are *not* taken into account here (except for login).

- [path](./tools/openapi/path.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=path)
- [query](./tools/openapi/query.yaml) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=query)

### OpenAPI files for Synology Office Suite WebAPI

The OpenAPI files below are part of the Synology Office Suite WebAPI. They are documented in more detail at https://office-suite-api.synology.com/ (account required)

- [Synology Calendar](./tools/openapi/Synology_Calendar.json) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Synology_Calendar)
- [Synology Drive](./tools/openapi/Synology_Drive.json) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Synology_Drive)
- [Synology MailPlus](./tools/openapi/Synology_MailPlus.json) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Synology_MailPlus)
- [Synology Spreadsheet](./tools/openapi/Synology_Spreadsheet.json) - [explore](https://github.mikespub.net/synology/tools/index.html?urls.primaryName=Synology_Spreadsheet)


## Synology REST API Gateway

The [rest.php](./tools/rest.php) script acts as a basic REST API gateway for exploring the OpenAPI files. It must be copied in the base directory of your Web Station along with the `combined.json`, `required.json` and `rest_mapping.php` files if you want to use it.

For most of the services, only the `list` or `getinfo` methods will actually work without additional parameters...
