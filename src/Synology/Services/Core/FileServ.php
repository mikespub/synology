<?php

namespace Synology\Services\Core;

use Synology\Services\BaseService;

/**
 * Class FileServ - created automatically by ServiceGenerator
 *
 * API: SYNO.Core.FileServ
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Core#/Core.FileServ
 * @package Synology\Services\Core
 */
class FileServ extends BaseService
{
    public const API_SERVICE_NAME = 'Core.FileServ';
    public const API_VERSION = 1;

    /**
     * Summary of getAFP
     *
     * API method: SYNO.Core.FileServ.AFP get (2)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.AFP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getAFP()
    {
        $api = 'AFP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 2;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFTP
     *
     * API method: SYNO.Core.FileServ.FTP get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.FTP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFTP()
    {
        $api = 'FTP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFTPSFTP
     *
     * API method: SYNO.Core.FileServ.FTP.SFTP get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.FTP.SFTP-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFTPSFTP()
    {
        $api = 'FTP.SFTP';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getFTPSecurity
     *
     * API method: SYNO.Core.FileServ.FTP.Security get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.FTP.Security-get.json
     * @return array|bool|string|\stdClass
     */
    public function getFTPSecurity()
    {
        $api = 'FTP.Security';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNFS
     *
     * API method: SYNO.Core.FileServ.NFS get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.NFS-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNFS()
    {
        $api = 'NFS';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getNFSAdvancedSetting
     *
     * API method: SYNO.Core.FileServ.NFS.AdvancedSetting get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.NFS.AdvancedSetting-get.json
     * @return array|bool|string|\stdClass
     */
    public function getNFSAdvancedSetting()
    {
        $api = 'NFS.AdvancedSetting';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNFSIDMap
     *
     * API method: SYNO.Core.FileServ.NFS.IDMap list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.NFS.IDMap-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNFSIDMap()
    {
        $api = 'NFS.IDMap';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listNFSKerberos
     *
     * API method: SYNO.Core.FileServ.NFS.Kerberos list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.NFS.Kerberos-list.json
     * @return array|bool|string|\stdClass
     */
    public function listNFSKerberos()
    {
        $api = 'NFS.Kerberos';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getReflinkCopy
     *
     * API method: SYNO.Core.FileServ.ReflinkCopy get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.ReflinkCopy-get.json
     * @return array|bool|string|\stdClass
     */
    public function getReflinkCopy()
    {
        $api = 'ReflinkCopy';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of listRsyncAccount
     *
     * API method: SYNO.Core.FileServ.Rsync.Account list (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.Rsync.Account-list.json
     * @return array|bool|string|\stdClass
     */
    public function listRsyncAccount()
    {
        $api = 'Rsync.Account';
        $path = static::API_PATH;
        $method = 'list';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSMB
     *
     * API method: SYNO.Core.FileServ.SMB get (3)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.SMB-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSMB()
    {
        $api = 'SMB';
        $path = static::API_PATH;
        $method = 'get';
        $version = 3;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSMBConfBackup
     *
     * API method: SYNO.Core.FileServ.SMB.ConfBackup get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.SMB.ConfBackup-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSMBConfBackup()
    {
        $api = 'SMB.ConfBackup';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getSMBMSDFS
     *
     * API method: SYNO.Core.FileServ.SMB.MSDFS get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.SMB.MSDFS-get.json
     * @return array|bool|string|\stdClass
     */
    public function getSMBMSDFS()
    {
        $api = 'SMB.MSDFS';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getServiceDiscoveryWSTransfer
     *
     * API method: SYNO.Core.FileServ.ServiceDiscovery.WSTransfer get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.ServiceDiscovery.WSTransfer-get.json
     * @return array|bool|string|\stdClass
     */
    public function getServiceDiscoveryWSTransfer()
    {
        $api = 'ServiceDiscovery.WSTransfer';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }

    /**
     * Summary of getServiceDiscovery
     *
     * API method: SYNO.Core.FileServ.ServiceDiscovery get (1)
     * @see https://github.mikespub.net/synology/tools/schemas/SYNO.Core.FileServ.ServiceDiscovery-get.json
     * @return array|bool|string|\stdClass
     */
    public function getServiceDiscovery()
    {
        $api = 'ServiceDiscovery';
        $path = static::API_PATH;
        $method = 'get';
        $version = 1;
        $params = [
        ];
        $this->client->setServiceName(static::API_SERVICE_NAME);
        return $this->client->call($api, $path, $method, $params, $version);
    }
}
