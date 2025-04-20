## Generated Synology\Services Classes

<pre>
use Synology\Applications\ClientFactory;

$syno = ClientFactory::getServices('192.168.10.5', 5001, 'https');
$syno->connect('admin', '****');
</pre>
<ul>
    <li>
        $syno->api() : <a href="./API.php">Synology\Services\API</a>
    </li>
    <li>
        $syno->activeinsight() : <a href="./ActiveInsight.php">Synology\Services\ActiveInsight</a>
    </li>
    <li>
        $syno->audiostation() : <a href="./AudioStation.php">Synology\Services\AudioStation</a>
    </li>
    <li>
        $syno->auth() : <a href="./Auth.php">Synology\Services\Auth</a>
    </li>
    <li>
        $syno->backup() : <a href="./Backup.php">Synology\Services\Backup</a>
    </li>
    <li>
        $syno->c2fs() : <a href="./C2FS.php">Synology\Services\C2FS</a>
    </li>
    <li>
        $syno->cal() : <a href="./Cal.php">Synology\Services\Cal</a>
    </li>
    <li>
        $syno->cloudsync() : <a href="./CloudSync.php">Synology\Services\CloudSync</a>
    </li>
    <li>
        $syno->contacts() : <a href="./Contacts.php">Synology\Services\Contacts</a>
    </li>
    <li>
        $syno->core() : <a href="./Core.php">Synology\Services\Core</a>
        <ul>
            <li>$syno->core()->actionpriv() : <a href="./Core/ActionPriv.php">Synology\Services\Core\ActionPriv</a></li>
            <li>$syno->core()->appportal() : <a href="./Core/AppPortal.php">Synology\Services\Core\AppPortal</a></li>
            <li>$syno->core()->apppriv() : <a href="./Core/AppPriv.php">Synology\Services\Core\AppPriv</a></li>
            <li>$syno->core()->bandwidthcontrol() : <a href="./Core/BandwidthControl.php">Synology\Services\Core\BandwidthControl</a></li>
            <li>$syno->core()->cms() : <a href="./Core/CMS.php">Synology\Services\Core\CMS</a></li>
            <li>$syno->core()->certificate() : <a href="./Core/Certificate.php">Synology\Services\Core\Certificate</a></li>
            <li>$syno->core()->ddns() : <a href="./Core/DDNS.php">Synology\Services\Core\DDNS</a></li>
            <li>$syno->core()->dsmnotify() : <a href="./Core/DSMNotify.php">Synology\Services\Core\DSMNotify</a></li>
            <li>$syno->core()->desktop() : <a href="./Core/Desktop.php">Synology\Services\Core\Desktop</a></li>
            <li>$syno->core()->directory() : <a href="./Core/Directory.php">Synology\Services\Core\Directory</a></li>
            <li>$syno->core()->ew() : <a href="./Core/EW.php">Synology\Services\Core\EW</a></li>
            <li>$syno->core()->externaldevice() : <a href="./Core/ExternalDevice.php">Synology\Services\Core\ExternalDevice</a></li>
            <li>$syno->core()->factory() : <a href="./Core/Factory.php">Synology\Services\Core\Factory</a></li>
            <li>$syno->core()->fileserv() : <a href="./Core/FileServ.php">Synology\Services\Core\FileServ</a></li>
            <li>$syno->core()->group() : <a href="./Core/Group.php">Synology\Services\Core\Group</a></li>
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
            <li>$syno->core()->security() : <a href="./Core/Security.php">Synology\Services\Core\Security</a></li>
            <li>$syno->core()->securityscan() : <a href="./Core/SecurityScan.php">Synology\Services\Core\SecurityScan</a></li>
            <li>$syno->core()->service() : <a href="./Core/Service.php">Synology\Services\Core\Service</a></li>
            <li>$syno->core()->share() : <a href="./Core/Share.php">Synology\Services\Core\Share</a></li>
            <li>$syno->core()->sharing() : <a href="./Core/Sharing.php">Synology\Services\Core\Sharing</a></li>
            <li>$syno->core()->smartblock() : <a href="./Core/SmartBlock.php">Synology\Services\Core\SmartBlock</a></li>
            <li>$syno->core()->supportform() : <a href="./Core/SupportForm.php">Synology\Services\Core\SupportForm</a></li>
            <li>$syno->core()->syslogclient() : <a href="./Core/SyslogClient.php">Synology\Services\Core\SyslogClient</a></li>
            <li>$syno->core()->system() : <a href="./Core/System.php">Synology\Services\Core\System</a></li>
            <li>$syno->core()->theme() : <a href="./Core/Theme.php">Synology\Services\Core\Theme</a></li>
            <li>$syno->core()->upgrade() : <a href="./Core/Upgrade.php">Synology\Services\Core\Upgrade</a></li>
            <li>$syno->core()->user() : <a href="./Core/User.php">Synology\Services\Core\User</a></li>
            <li>$syno->core()->virtualization() : <a href="./Core/Virtualization.php">Synology\Services\Core\Virtualization</a></li>
            <li>$syno->core()->web() : <a href="./Core/Web.php">Synology\Services\Core\Web</a></li>
        </ul>
    </li>
    <li>
        $syno->dr() : <a href="./DR.php">Synology\Services\DR</a>
    </li>
    <li>
        $syno->dsm() : <a href="./DSM.php">Synology\Services\DSM</a>
    </li>
    <li>
        $syno->disasterrecovery() : <a href="./DisasterRecovery.php">Synology\Services\DisasterRecovery</a>
    </li>
    <li>
        $syno->docker() : <a href="./Docker.php">Synology\Services\Docker</a>
    </li>
    <li>
        $syno->downloadstation() : <a href="./DownloadStation.php">Synology\Services\DownloadStation</a>
    </li>
    <li>
        $syno->downloadstation2() : <a href="./DownloadStation2.php">Synology\Services\DownloadStation2</a>
    </li>
    <li>
        $syno->filestation() : <a href="./FileStation.php">Synology\Services\FileStation</a>
    </li>
    <li>
        $syno->finder() : <a href="./Finder.php">Synology\Services\Finder</a>
    </li>
    <li>
        $syno->foto() : <a href="./Foto.php">Synology\Services\Foto</a>
    </li>
    <li>
        $syno->fototeam() : <a href="./FotoTeam.php">Synology\Services\FotoTeam</a>
    </li>
    <li>
        $syno->mediaserver() : <a href="./MediaServer.php">Synology\Services\MediaServer</a>
    </li>
    <li>
        $syno->network() : <a href="./Network.php">Synology\Services\Network</a>
    </li>
    <li>
        $syno->notestation() : <a href="./NoteStation.php">Synology\Services\NoteStation</a>
    </li>
    <li>
        $syno->oauth() : <a href="./OAUTH.php">Synology\Services\OAUTH</a>
    </li>
    <li>
        $syno->office() : <a href="./Office.php">Synology\Services\Office</a>
    </li>
    <li>
        $syno->package() : <a href="./Package.php">Synology\Services\Package</a>
    </li>
    <li>
        $syno->personmailaccount() : <a href="./PersonMailAccount.php">Synology\Services\PersonMailAccount</a>
    </li>
    <li>
        $syno->personal() : <a href="./Personal.php">Synology\Services\Personal</a>
    </li>
    <li>
        $syno->remote() : <a href="./Remote.php">Synology\Services\Remote</a>
    </li>
    <li>
        $syno->resourcemonitor() : <a href="./ResourceMonitor.php">Synology\Services\ResourceMonitor</a>
    </li>
    <li>
        $syno->s2s() : <a href="./S2S.php">Synology\Services\S2S</a>
    </li>
    <li>
        $syno->sds() : <a href="./SDS.php">Synology\Services\SDS</a>
    </li>
    <li>
        $syno->securesignin() : <a href="./SecureSignIn.php">Synology\Services\SecureSignIn</a>
    </li>
    <li>
        $syno->securityadvisor() : <a href="./SecurityAdvisor.php">Synology\Services\SecurityAdvisor</a>
    </li>
    <li>
        $syno->storage() : <a href="./Storage.php">Synology\Services\Storage</a>
    </li>
    <li>
        $syno->supportservice() : <a href="./SupportService.php">Synology\Services\SupportService</a>
    </li>
    <li>
        $syno->synologydrive() : <a href="./SynologyDrive.php">Synology\Services\SynologyDrive</a>
    </li>
    <li>
        $syno->synologydrivesharesync() : <a href="./SynologyDriveShareSync.php">Synology\Services\SynologyDriveShareSync</a>
    </li>
    <li>
        $syno->texteditor() : <a href="./TextEditor.php">Synology\Services\TextEditor</a>
    </li>
    <li>
        $syno->usbcopy() : <a href="./USBCopy.php">Synology\Services\USBCopy</a>
    </li>
    <li>
        $syno->webstation() : <a href="./WebStation.php">Synology\Services\WebStation</a>
    </li>
</ul>

