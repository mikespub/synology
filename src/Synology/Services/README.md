## Generated Synology\Services Classes

<pre>
use Synology\Applications\ClientFactory;

$syno = ClientFactory::getServices('192.168.10.5', 5001, 'https');
$syno->connect('admin', '****');
</pre>
<ul>
    <li>
        $syno->api() : <a href="./API.php">Synology\Services\API</a>
        <ul>
            <li>$syno->api()->auth() : <a href="./API/Auth.php">Synology\Services\API\Auth</a></li>
        </ul>
    </li>
    <li>
        $syno->activeinsight() : <a href="./ActiveInsight.php">Synology\Services\ActiveInsight</a>
        <ul>
            <li>$syno->activeinsight()->completecollection() : <a href="./ActiveInsight/CompleteCollection.php">Synology\Services\ActiveInsight\CompleteCollection</a></li>
            <li>$syno->activeinsight()->setting() : <a href="./ActiveInsight/Setting.php">Synology\Services\ActiveInsight\Setting</a></li>
        </ul>
    </li>
    <li>
        $syno->audiostation() : <a href="./AudioStation.php">Synology\Services\AudioStation</a>
        <ul>
            <li>$syno->audiostation()->folder() : <a href="./AudioStation/Folder.php">Synology\Services\AudioStation\Folder</a></li>
            <li>$syno->audiostation()->genre() : <a href="./AudioStation/Genre.php">Synology\Services\AudioStation\Genre</a></li>
            <li>$syno->audiostation()->playlist() : <a href="./AudioStation/Playlist.php">Synology\Services\AudioStation\Playlist</a></li>
            <li>$syno->audiostation()->radio() : <a href="./AudioStation/Radio.php">Synology\Services\AudioStation\Radio</a></li>
            <li>$syno->audiostation()->remoteplayer() : <a href="./AudioStation/RemotePlayer.php">Synology\Services\AudioStation\RemotePlayer</a></li>
            <li>$syno->audiostation()->song() : <a href="./AudioStation/Song.php">Synology\Services\AudioStation\Song</a></li>
            <li>$syno->audiostation()->pin() : <a href="./AudioStation/Pin.php">Synology\Services\AudioStation\Pin</a></li>
            <li>$syno->audiostation()->voiceassistant() : <a href="./AudioStation/VoiceAssistant.php">Synology\Services\AudioStation\VoiceAssistant</a></li>
        </ul>
    </li>
    <li>
        $syno->auth() : <a href="./Auth.php">Synology\Services\Auth</a>
        <ul>
            <li>$syno->auth()->rescueemail() : <a href="./Auth/RescueEmail.php">Synology\Services\Auth\RescueEmail</a></li>
        </ul>
    </li>
    <li>
        $syno->backup() : <a href="./Backup.php">Synology\Services\Backup</a>
        <ul>
            <li>$syno->backup()->config() : <a href="./Backup/Config.php">Synology\Services\Backup\Config</a></li>
            <li>$syno->backup()->service() : <a href="./Backup/Service.php">Synology\Services\Backup\Service</a></li>
            <li>$syno->backup()->app2() : <a href="./Backup/App2.php">Synology\Services\Backup\App2</a></li>
            <li>$syno->backup()->repository() : <a href="./Backup/Repository.php">Synology\Services\Backup\Repository</a></li>
            <li>$syno->backup()->storage() : <a href="./Backup/Storage.php">Synology\Services\Backup\Storage</a></li>
            <li>$syno->backup()->task() : <a href="./Backup/Task.php">Synology\Services\Backup\Task</a></li>
        </ul>
    </li>
    <li>
        $syno->c2fs() : <a href="./C2FS.php">Synology\Services\C2FS</a>
        <ul>
            <li>$syno->c2fs()->share() : <a href="./C2FS/Share.php">Synology\Services\C2FS\Share</a></li>
        </ul>
    </li>
    <li>
        $syno->cal() : <a href="./Cal.php">Synology\Services\Cal</a>
        <ul>
            <li>$syno->cal()->share() : <a href="./Cal/Share.php">Synology\Services\Cal\Share</a></li>
        </ul>
    </li>
    <li>
        $syno->cloudsync() : <a href="./CloudSync.php">Synology\Services\CloudSync</a>
    </li>
    <li>
        $syno->contacts() : <a href="./Contacts.php">Synology\Services\Contacts</a>
        <ul>
            <li>$syno->contacts()->addressbook() : <a href="./Contacts/Addressbook.php">Synology\Services\Contacts\Addressbook</a></li>
            <li>$syno->contacts()->adminsetting() : <a href="./Contacts/AdminSetting.php">Synology\Services\Contacts\AdminSetting</a></li>
            <li>$syno->contacts()->contact() : <a href="./Contacts/Contact.php">Synology\Services\Contacts\Contact</a></li>
            <li>$syno->contacts()->externalsource() : <a href="./Contacts/ExternalSource.php">Synology\Services\Contacts\ExternalSource</a></li>
            <li>$syno->contacts()->info() : <a href="./Contacts/Info.php">Synology\Services\Contacts\Info</a></li>
            <li>$syno->contacts()->label() : <a href="./Contacts/Label.php">Synology\Services\Contacts\Label</a></li>
        </ul>
    </li>
    <li>
        $syno->core() : <a href="./Core.php">Synology\Services\Core</a>
        <ul>
            <li>$syno->core()->actionpriv() : <a href="./Core/ActionPriv.php">Synology\Services\Core\ActionPriv</a></li>
            <li>$syno->core()->appnotify() : <a href="./Core/AppNotify.php">Synology\Services\Core\AppNotify</a></li>
            <li>$syno->core()->appportal() : <a href="./Core/AppPortal.php">Synology\Services\Core\AppPortal</a></li>
            <li>$syno->core()->apppriv() : <a href="./Core/AppPriv.php">Synology\Services\Core\AppPriv</a></li>
            <li>$syno->core()->bandwidthcontrol() : <a href="./Core/BandwidthControl.php">Synology\Services\Core\BandwidthControl</a></li>
            <li>$syno->core()->cms() : <a href="./Core/CMS.php">Synology\Services\Core\CMS</a></li>
            <li>$syno->core()->certificate() : <a href="./Core/Certificate.php">Synology\Services\Core\Certificate</a></li>
            <li>$syno->core()->currentconnection() : <a href="./Core/CurrentConnection.php">Synology\Services\Core\CurrentConnection</a></li>
            <li>$syno->core()->ddns() : <a href="./Core/DDNS.php">Synology\Services\Core\DDNS</a></li>
            <li>$syno->core()->dsmnotify() : <a href="./Core/DSMNotify.php">Synology\Services\Core\DSMNotify</a></li>
            <li>$syno->core()->datacollect() : <a href="./Core/DataCollect.php">Synology\Services\Core\DataCollect</a></li>
            <li>$syno->core()->desktop() : <a href="./Core/Desktop.php">Synology\Services\Core\Desktop</a></li>
            <li>$syno->core()->directory() : <a href="./Core/Directory.php">Synology\Services\Core\Directory</a></li>
            <li>$syno->core()->disableadmin() : <a href="./Core/DisableAdmin.php">Synology\Services\Core\DisableAdmin</a></li>
            <li>$syno->core()->ew() : <a href="./Core/EW.php">Synology\Services\Core\EW</a></li>
            <li>$syno->core()->eventscheduler() : <a href="./Core/EventScheduler.php">Synology\Services\Core\EventScheduler</a></li>
            <li>$syno->core()->externaldevice() : <a href="./Core/ExternalDevice.php">Synology\Services\Core\ExternalDevice</a></li>
            <li>$syno->core()->factory() : <a href="./Core/Factory.php">Synology\Services\Core\Factory</a></li>
            <li>$syno->core()->filehandle() : <a href="./Core/FileHandle.php">Synology\Services\Core\FileHandle</a></li>
            <li>$syno->core()->fileserv() : <a href="./Core/FileServ.php">Synology\Services\Core\FileServ</a></li>
            <li>$syno->core()->group() : <a href="./Core/Group.php">Synology\Services\Core\Group</a></li>
            <li>$syno->core()->groupsettings() : <a href="./Core/GroupSettings.php">Synology\Services\Core\GroupSettings</a></li>
            <li>$syno->core()->hardware() : <a href="./Core/Hardware.php">Synology\Services\Core\Hardware</a></li>
            <li>$syno->core()->iscsi() : <a href="./Core/ISCSI.php">Synology\Services\Core\ISCSI</a></li>
            <li>$syno->core()->mediaindexing() : <a href="./Core/MediaIndexing.php">Synology\Services\Core\MediaIndexing</a></li>
            <li>$syno->core()->mydscenter() : <a href="./Core/MyDSCenter.php">Synology\Services\Core\MyDSCenter</a></li>
            <li>$syno->core()->network() : <a href="./Core/Network.php">Synology\Services\Core\Network</a></li>
            <li>$syno->core()->notification() : <a href="./Core/Notification.php">Synology\Services\Core\Notification</a></li>
            <li>$syno->core()->oauth() : <a href="./Core/OAuth.php">Synology\Services\Core\OAuth</a></li>
            <li>$syno->core()->package() : <a href="./Core/Package.php">Synology\Services\Core\Package</a></li>
            <li>$syno->core()->personalnotification() : <a href="./Core/PersonalNotification.php">Synology\Services\Core\PersonalNotification</a></li>
            <li>$syno->core()->polling() : <a href="./Core/Polling.php">Synology\Services\Core\Polling</a></li>
            <li>$syno->core()->portforwarding() : <a href="./Core/PortForwarding.php">Synology\Services\Core\PortForwarding</a></li>
            <li>$syno->core()->quickconnect() : <a href="./Core/QuickConnect.php">Synology\Services\Core\QuickConnect</a></li>
            <li>$syno->core()->recyclebin() : <a href="./Core/RecycleBin.php">Synology\Services\Core\RecycleBin</a></li>
            <li>$syno->core()->region() : <a href="./Core/Region.php">Synology\Services\Core\Region</a></li>
            <li>$syno->core()->report() : <a href="./Core/Report.php">Synology\Services\Core\Report</a></li>
            <li>$syno->core()->snmp() : <a href="./Core/SNMP.php">Synology\Services\Core\SNMP</a></li>
            <li>$syno->core()->security() : <a href="./Core/Security.php">Synology\Services\Core\Security</a></li>
            <li>$syno->core()->securityscan() : <a href="./Core/SecurityScan.php">Synology\Services\Core\SecurityScan</a></li>
            <li>$syno->core()->service() : <a href="./Core/Service.php">Synology\Services\Core\Service</a></li>
            <li>$syno->core()->share() : <a href="./Core/Share.php">Synology\Services\Core\Share</a></li>
            <li>$syno->core()->sharing() : <a href="./Core/Sharing.php">Synology\Services\Core\Sharing</a></li>
            <li>$syno->core()->smartblock() : <a href="./Core/SmartBlock.php">Synology\Services\Core\SmartBlock</a></li>
            <li>$syno->core()->supportform() : <a href="./Core/SupportForm.php">Synology\Services\Core\SupportForm</a></li>
            <li>$syno->core()->synohdpack() : <a href="./Core/Synohdpack.php">Synology\Services\Core\Synohdpack</a></li>
            <li>$syno->core()->syslogclient() : <a href="./Core/SyslogClient.php">Synology\Services\Core\SyslogClient</a></li>
            <li>$syno->core()->system() : <a href="./Core/System.php">Synology\Services\Core\System</a></li>
            <li>$syno->core()->tftp() : <a href="./Core/TFTP.php">Synology\Services\Core\TFTP</a></li>
            <li>$syno->core()->terminal() : <a href="./Core/Terminal.php">Synology\Services\Core\Terminal</a></li>
            <li>$syno->core()->theme() : <a href="./Core/Theme.php">Synology\Services\Core\Theme</a></li>
            <li>$syno->core()->upgrade() : <a href="./Core/Upgrade.php">Synology\Services\Core\Upgrade</a></li>
            <li>$syno->core()->user() : <a href="./Core/User.php">Synology\Services\Core\User</a></li>
            <li>$syno->core()->usersettings() : <a href="./Core/UserSettings.php">Synology\Services\Core\UserSettings</a></li>
            <li>$syno->core()->virtualization() : <a href="./Core/Virtualization.php">Synology\Services\Core\Virtualization</a></li>
            <li>$syno->core()->volenckeepkey() : <a href="./Core/VolEncKeepKey.php">Synology\Services\Core\VolEncKeepKey</a></li>
            <li>$syno->core()->web() : <a href="./Core/Web.php">Synology\Services\Core\Web</a></li>
        </ul>
    </li>
    <li>
        $syno->dr() : <a href="./DR.php">Synology\Services\DR</a>
        <ul>
            <li>$syno->dr()->node() : <a href="./DR/Node.php">Synology\Services\DR\Node</a></li>
        </ul>
    </li>
    <li>
        $syno->dsm() : <a href="./DSM.php">Synology\Services\DSM</a>
    </li>
    <li>
        $syno->disasterrecovery() : <a href="./DisasterRecovery.php">Synology\Services\DisasterRecovery</a>
        <ul>
            <li>$syno->disasterrecovery()->log() : <a href="./DisasterRecovery/Log.php">Synology\Services\DisasterRecovery\Log</a></li>
        </ul>
    </li>
    <li>
        $syno->docker() : <a href="./Docker.php">Synology\Services\Docker</a>
        <ul>
            <li>$syno->docker()->container() : <a href="./Docker/Container.php">Synology\Services\Docker\Container</a></li>
            <li>$syno->docker()->image() : <a href="./Docker/Image.php">Synology\Services\Docker\Image</a></li>
            <li>$syno->docker()->network() : <a href="./Docker/Network.php">Synology\Services\Docker\Network</a></li>
            <li>$syno->docker()->project() : <a href="./Docker/Project.php">Synology\Services\Docker\Project</a></li>
        </ul>
    </li>
    <li>
        $syno->downloadstation() : <a href="./DownloadStation.php">Synology\Services\DownloadStation</a>
        <ul>
            <li>$syno->downloadstation()->btsearch() : <a href="./DownloadStation/BTSearch.php">Synology\Services\DownloadStation\BTSearch</a></li>
            <li>$syno->downloadstation()->info() : <a href="./DownloadStation/Info.php">Synology\Services\DownloadStation\Info</a></li>
            <li>$syno->downloadstation()->rss() : <a href="./DownloadStation/RSS.php">Synology\Services\DownloadStation\RSS</a></li>
            <li>$syno->downloadstation()->task() : <a href="./DownloadStation/Task.php">Synology\Services\DownloadStation\Task</a></li>
        </ul>
    </li>
    <li>
        $syno->downloadstation2() : <a href="./DownloadStation2.php">Synology\Services\DownloadStation2</a>
        <ul>
            <li>$syno->downloadstation2()->captcha() : <a href="./DownloadStation2/Captcha.php">Synology\Services\DownloadStation2\Captcha</a></li>
            <li>$syno->downloadstation2()->package() : <a href="./DownloadStation2/Package.php">Synology\Services\DownloadStation2\Package</a></li>
            <li>$syno->downloadstation2()->rss() : <a href="./DownloadStation2/RSS.php">Synology\Services\DownloadStation2\RSS</a></li>
            <li>$syno->downloadstation2()->settings() : <a href="./DownloadStation2/Settings.php">Synology\Services\DownloadStation2\Settings</a></li>
            <li>$syno->downloadstation2()->task() : <a href="./DownloadStation2/Task.php">Synology\Services\DownloadStation2\Task</a></li>
        </ul>
    </li>
    <li>
        $syno->filestation() : <a href="./FileStation.php">Synology\Services\FileStation</a>
        <ul>
            <li>$syno->filestation()->backgroundtask() : <a href="./FileStation/BackgroundTask.php">Synology\Services\FileStation\BackgroundTask</a></li>
            <li>$syno->filestation()->favorite() : <a href="./FileStation/Favorite.php">Synology\Services\FileStation\Favorite</a></li>
            <li>$syno->filestation()->list() : <a href="./FileStation/List.php">Synology\Services\FileStation\List</a></li>
            <li>$syno->filestation()->mount() : <a href="./FileStation/Mount.php">Synology\Services\FileStation\Mount</a></li>
            <li>$syno->filestation()->search() : <a href="./FileStation/Search.php">Synology\Services\FileStation\Search</a></li>
            <li>$syno->filestation()->settings() : <a href="./FileStation/Settings.php">Synology\Services\FileStation\Settings</a></li>
            <li>$syno->filestation()->sharing() : <a href="./FileStation/Sharing.php">Synology\Services\FileStation\Sharing</a></li>
            <li>$syno->filestation()->vfs() : <a href="./FileStation/VFS.php">Synology\Services\FileStation\VFS</a></li>
        </ul>
    </li>
    <li>
        $syno->finder() : <a href="./Finder.php">Synology\Services\Finder</a>
        <ul>
            <li>$syno->finder()->bookmark() : <a href="./Finder/Bookmark.php">Synology\Services\Finder\Bookmark</a></li>
            <li>$syno->finder()->elastic() : <a href="./Finder/Elastic.php">Synology\Services\Finder\Elastic</a></li>
            <li>$syno->finder()->fileindexing() : <a href="./Finder/FileIndexing.php">Synology\Services\Finder\FileIndexing</a></li>
            <li>$syno->finder()->preference() : <a href="./Finder/Preference.php">Synology\Services\Finder\Preference</a></li>
            <li>$syno->finder()->settings() : <a href="./Finder/Settings.php">Synology\Services\Finder\Settings</a></li>
        </ul>
    </li>
    <li>
        $syno->foto() : <a href="./Foto.php">Synology\Services\Foto</a>
        <ul>
            <li>$syno->foto()->browse() : <a href="./Foto/Browse.php">Synology\Services\Foto\Browse</a></li>
            <li>$syno->foto()->index() : <a href="./Foto/Index.php">Synology\Services\Foto\Index</a></li>
            <li>$syno->foto()->photorequest() : <a href="./Foto/PhotoRequest.php">Synology\Services\Foto\PhotoRequest</a></li>
            <li>$syno->foto()->search() : <a href="./Foto/Search.php">Synology\Services\Foto\Search</a></li>
            <li>$syno->foto()->setting() : <a href="./Foto/Setting.php">Synology\Services\Foto\Setting</a></li>
        </ul>
    </li>
    <li>
        $syno->fototeam() : <a href="./FotoTeam.php">Synology\Services\FotoTeam</a>
        <ul>
            <li>$syno->fototeam()->browse() : <a href="./FotoTeam/Browse.php">Synology\Services\FotoTeam\Browse</a></li>
            <li>$syno->fototeam()->index() : <a href="./FotoTeam/Index.php">Synology\Services\FotoTeam\Index</a></li>
            <li>$syno->fototeam()->search() : <a href="./FotoTeam/Search.php">Synology\Services\FotoTeam\Search</a></li>
        </ul>
    </li>
    <li>
        $syno->mediaserver() : <a href="./MediaServer.php">Synology\Services\MediaServer</a>
        <ul>
            <li>$syno->mediaserver()->log() : <a href="./MediaServer/Log.php">Synology\Services\MediaServer\Log</a></li>
            <li>$syno->mediaserver()->videocollection() : <a href="./MediaServer/VideoCollection.php">Synology\Services\MediaServer\VideoCollection</a></li>
        </ul>
    </li>
    <li>
        $syno->network() : <a href="./Network.php">Synology\Services\Network</a>
        <ul>
            <li>$syno->network()->dhcpserver() : <a href="./Network/DHCPServer.php">Synology\Services\Network\DHCPServer</a></li>
        </ul>
    </li>
    <li>
        $syno->notestation() : <a href="./NoteStation.php">Synology\Services\NoteStation</a>
        <ul>
            <li>$syno->notestation()->info() : <a href="./NoteStation/Info.php">Synology\Services\NoteStation\Info</a></li>
            <li>$syno->notestation()->note() : <a href="./NoteStation/Note.php">Synology\Services\NoteStation\Note</a></li>
            <li>$syno->notestation()->notebook() : <a href="./NoteStation/Notebook.php">Synology\Services\NoteStation\Notebook</a></li>
            <li>$syno->notestation()->setting() : <a href="./NoteStation/Setting.php">Synology\Services\NoteStation\Setting</a></li>
            <li>$syno->notestation()->share() : <a href="./NoteStation/Share.php">Synology\Services\NoteStation\Share</a></li>
            <li>$syno->notestation()->shortcut() : <a href="./NoteStation/Shortcut.php">Synology\Services\NoteStation\Shortcut</a></li>
            <li>$syno->notestation()->smart() : <a href="./NoteStation/Smart.php">Synology\Services\NoteStation\Smart</a></li>
            <li>$syno->notestation()->tag() : <a href="./NoteStation/Tag.php">Synology\Services\NoteStation\Tag</a></li>
            <li>$syno->notestation()->todo() : <a href="./NoteStation/Todo.php">Synology\Services\NoteStation\Todo</a></li>
        </ul>
    </li>
    <li>
        $syno->oauth() : <a href="./OAUTH.php">Synology\Services\OAUTH</a>
        <ul>
            <li>$syno->oauth()->client() : <a href="./OAUTH/Client.php">Synology\Services\OAUTH\Client</a></li>
            <li>$syno->oauth()->common() : <a href="./OAUTH/Common.php">Synology\Services\OAUTH\Common</a></li>
            <li>$syno->oauth()->log() : <a href="./OAUTH/Log.php">Synology\Services\OAUTH\Log</a></li>
            <li>$syno->oauth()->token() : <a href="./OAUTH/Token.php">Synology\Services\OAUTH\Token</a></li>
        </ul>
    </li>
    <li>
        $syno->office() : <a href="./Office.php">Synology\Services\Office</a>
        <ul>
            <li>$syno->office()->dictionary() : <a href="./Office/Dictionary.php">Synology\Services\Office\Dictionary</a></li>
            <li>$syno->office()->info() : <a href="./Office/Info.php">Synology\Services\Office\Info</a></li>
            <li>$syno->office()->locale() : <a href="./Office/Locale.php">Synology\Services\Office\Locale</a></li>
            <li>$syno->office()->setting() : <a href="./Office/Setting.php">Synology\Services\Office\Setting</a></li>
            <li>$syno->office()->shard() : <a href="./Office/Shard.php">Synology\Services\Office\Shard</a></li>
            <li>$syno->office()->sheet() : <a href="./Office/Sheet.php">Synology\Services\Office\Sheet</a></li>
            <li>$syno->office()->template() : <a href="./Office/Template.php">Synology\Services\Office\Template</a></li>
        </ul>
    </li>
    <li>
        $syno->package() : <a href="./Package.php">Synology\Services\Package</a>
    </li>
    <li>
        $syno->personmailaccount() : <a href="./PersonMailAccount.php">Synology\Services\PersonMailAccount</a>
    </li>
    <li>
        $syno->personal() : <a href="./Personal.php">Synology\Services\Personal</a>
        <ul>
            <li>$syno->personal()->application() : <a href="./Personal/Application.php">Synology\Services\Personal\Application</a></li>
            <li>$syno->personal()->mailaccount() : <a href="./Personal/MailAccount.php">Synology\Services\Personal\MailAccount</a></li>
            <li>$syno->personal()->notification() : <a href="./Personal/Notification.php">Synology\Services\Personal\Notification</a></li>
            <li>$syno->personal()->profile() : <a href="./Personal/Profile.php">Synology\Services\Personal\Profile</a></li>
        </ul>
    </li>
    <li>
        $syno->remote() : <a href="./Remote.php">Synology\Services\Remote</a>
        <ul>
            <li>$syno->remote()->credential() : <a href="./Remote/Credential.php">Synology\Services\Remote\Credential</a></li>
        </ul>
    </li>
    <li>
        $syno->resourcemonitor() : <a href="./ResourceMonitor.php">Synology\Services\ResourceMonitor</a>
        <ul>
            <li>$syno->resourcemonitor()->eventrule() : <a href="./ResourceMonitor/EventRule.php">Synology\Services\ResourceMonitor\EventRule</a></li>
            <li>$syno->resourcemonitor()->log() : <a href="./ResourceMonitor/Log.php">Synology\Services\ResourceMonitor\Log</a></li>
            <li>$syno->resourcemonitor()->setting() : <a href="./ResourceMonitor/Setting.php">Synology\Services\ResourceMonitor\Setting</a></li>
        </ul>
    </li>
    <li>
        $syno->s2s() : <a href="./S2S.php">Synology\Services\S2S</a>
        <ul>
            <li>$syno->s2s()->server() : <a href="./S2S/Server.php">Synology\Services\S2S\Server</a></li>
            <li>$syno->s2s()->client() : <a href="./S2S/Client.php">Synology\Services\S2S\Client</a></li>
        </ul>
    </li>
    <li>
        $syno->sds() : <a href="./SDS.php">Synology\Services\SDS</a>
        <ul>
            <li>$syno->sds()->backup() : <a href="./SDS/Backup.php">Synology\Services\SDS\Backup</a></li>
        </ul>
    </li>
    <li>
        $syno->securesignin() : <a href="./SecureSignIn.php">Synology\Services\SecureSignIn</a>
        <ul>
            <li>$syno->securesignin()->amfa() : <a href="./SecureSignIn/AMFA.php">Synology\Services\SecureSignIn\AMFA</a></li>
            <li>$syno->securesignin()->authenticator() : <a href="./SecureSignIn/Authenticator.php">Synology\Services\SecureSignIn\Authenticator</a></li>
            <li>$syno->securesignin()->fido() : <a href="./SecureSignIn/Fido.php">Synology\Services\SecureSignIn\Fido</a></li>
            <li>$syno->securesignin()->method() : <a href="./SecureSignIn/Method.php">Synology\Services\SecureSignIn\Method</a></li>
            <li>$syno->securesignin()->package() : <a href="./SecureSignIn/Package.php">Synology\Services\SecureSignIn\Package</a></li>
        </ul>
    </li>
    <li>
        $syno->securityadvisor() : <a href="./SecurityAdvisor.php">Synology\Services\SecurityAdvisor</a>
        <ul>
            <li>$syno->securityadvisor()->conf() : <a href="./SecurityAdvisor/Conf.php">Synology\Services\SecurityAdvisor\Conf</a></li>
            <li>$syno->securityadvisor()->loginactivity() : <a href="./SecurityAdvisor/LoginActivity.php">Synology\Services\SecurityAdvisor\LoginActivity</a></li>
        </ul>
    </li>
    <li>
        $syno->storage() : <a href="./Storage.php">Synology\Services\Storage</a>
        <ul>
            <li>$syno->storage()->cgi() : <a href="./Storage/CGI.php">Synology\Services\Storage\CGI</a></li>
        </ul>
    </li>
    <li>
        $syno->supportservice() : <a href="./SupportService.php">Synology\Services\SupportService</a>
        <ul>
            <li>$syno->supportservice()->setting() : <a href="./SupportService/Setting.php">Synology\Services\SupportService\Setting</a></li>
        </ul>
    </li>
    <li>
        $syno->synologydrive() : <a href="./SynologyDrive.php">Synology\Services\SynologyDrive</a>
        <ul>
            <li>$syno->synologydrive()->activation() : <a href="./SynologyDrive/Activation.php">Synology\Services\SynologyDrive\Activation</a></li>
            <li>$syno->synologydrive()->appintegration() : <a href="./SynologyDrive/AppIntegration.php">Synology\Services\SynologyDrive\AppIntegration</a></li>
            <li>$syno->synologydrive()->config() : <a href="./SynologyDrive/Config.php">Synology\Services\SynologyDrive\Config</a></li>
            <li>$syno->synologydrive()->connection() : <a href="./SynologyDrive/Connection.php">Synology\Services\SynologyDrive\Connection</a></li>
            <li>$syno->synologydrive()->dbusage() : <a href="./SynologyDrive/DBUsage.php">Synology\Services\SynologyDrive\DBUsage</a></li>
            <li>$syno->synologydrive()->hybridshare() : <a href="./SynologyDrive/HybridShare.php">Synology\Services\SynologyDrive\HybridShare</a></li>
            <li>$syno->synologydrive()->info() : <a href="./SynologyDrive/Info.php">Synology\Services\SynologyDrive\Info</a></li>
            <li>$syno->synologydrive()->keymanagement() : <a href="./SynologyDrive/KeyManagement.php">Synology\Services\SynologyDrive\KeyManagement</a></li>
            <li>$syno->synologydrive()->labels() : <a href="./SynologyDrive/Labels.php">Synology\Services\SynologyDrive\Labels</a></li>
            <li>$syno->synologydrive()->metrics() : <a href="./SynologyDrive/Metrics.php">Synology\Services\SynologyDrive\Metrics</a></li>
            <li>$syno->synologydrive()->migration() : <a href="./SynologyDrive/Migration.php">Synology\Services\SynologyDrive\Migration</a></li>
            <li>$syno->synologydrive()->node() : <a href="./SynologyDrive/Node.php">Synology\Services\SynologyDrive\Node</a></li>
            <li>$syno->synologydrive()->notifications() : <a href="./SynologyDrive/Notifications.php">Synology\Services\SynologyDrive\Notifications</a></li>
            <li>$syno->synologydrive()->privilege() : <a href="./SynologyDrive/Privilege.php">Synology\Services\SynologyDrive\Privilege</a></li>
            <li>$syno->synologydrive()->profiles() : <a href="./SynologyDrive/Profiles.php">Synology\Services\SynologyDrive\Profiles</a></li>
            <li>$syno->synologydrive()->scim() : <a href="./SynologyDrive/SCIM.php">Synology\Services\SynologyDrive\SCIM</a></li>
            <li>$syno->synologydrive()->settings() : <a href="./SynologyDrive/Settings.php">Synology\Services\SynologyDrive\Settings</a></li>
            <li>$syno->synologydrive()->shard() : <a href="./SynologyDrive/Shard.php">Synology\Services\SynologyDrive\Shard</a></li>
            <li>$syno->synologydrive()->share() : <a href="./SynologyDrive/Share.php">Synology\Services\SynologyDrive\Share</a></li>
            <li>$syno->synologydrive()->tasks() : <a href="./SynologyDrive/Tasks.php">Synology\Services\SynologyDrive\Tasks</a></li>
            <li>$syno->synologydrive()->teamfolders() : <a href="./SynologyDrive/TeamFolders.php">Synology\Services\SynologyDrive\TeamFolders</a></li>
        </ul>
    </li>
    <li>
        $syno->synologydrivesharesync() : <a href="./SynologyDriveShareSync.php">Synology\Services\SynologyDriveShareSync</a>
        <ul>
            <li>$syno->synologydrivesharesync()->config() : <a href="./SynologyDriveShareSync/Config.php">Synology\Services\SynologyDriveShareSync\Config</a></li>
            <li>$syno->synologydrivesharesync()->connection() : <a href="./SynologyDriveShareSync/Connection.php">Synology\Services\SynologyDriveShareSync\Connection</a></li>
        </ul>
    </li>
    <li>
        $syno->texteditor() : <a href="./TextEditor.php">Synology\Services\TextEditor</a>
        <ul>
            <li>$syno->texteditor()->preference() : <a href="./TextEditor/Preference.php">Synology\Services\TextEditor\Preference</a></li>
        </ul>
    </li>
    <li>
        $syno->usbcopy() : <a href="./USBCopy.php">Synology\Services\USBCopy</a>
    </li>
    <li>
        $syno->webstation() : <a href="./WebStation.php">Synology\Services\WebStation</a>
        <ul>
            <li>$syno->webstation()->backup() : <a href="./WebStation/Backup.php">Synology\Services\WebStation\Backup</a></li>
            <li>$syno->webstation()->default() : <a href="./WebStation/Default.php">Synology\Services\WebStation\Default</a></li>
            <li>$syno->webstation()->errorpage() : <a href="./WebStation/ErrorPage.php">Synology\Services\WebStation\ErrorPage</a></li>
            <li>$syno->webstation()->http() : <a href="./WebStation/HTTP.php">Synology\Services\WebStation\HTTP</a></li>
            <li>$syno->webstation()->php() : <a href="./WebStation/PHP.php">Synology\Services\WebStation\PHP</a></li>
            <li>$syno->webstation()->package() : <a href="./WebStation/Package.php">Synology\Services\WebStation\Package</a></li>
            <li>$syno->webstation()->python() : <a href="./WebStation/Python.php">Synology\Services\WebStation\Python</a></li>
            <li>$syno->webstation()->scriptlanguage() : <a href="./WebStation/ScriptLanguage.php">Synology\Services\WebStation\ScriptLanguage</a></li>
            <li>$syno->webstation()->shortcut() : <a href="./WebStation/Shortcut.php">Synology\Services\WebStation\Shortcut</a></li>
            <li>$syno->webstation()->task() : <a href="./WebStation/Task.php">Synology\Services\WebStation\Task</a></li>
            <li>$syno->webstation()->webservice() : <a href="./WebStation/WebService.php">Synology\Services\WebStation\WebService</a></li>
        </ul>
    </li>
</ul>

