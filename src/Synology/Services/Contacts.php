<?php

namespace Synology\Services;

/**
 * Class Contacts - created automatically by ServiceGenerator
 *
 * API: SYNO.Contacts
 * ```
 * $result = $syno->contacts()->addressbook()->list();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts
 * @package Synology\Services
 */
class Contacts extends BaseService
{
    public const API_SERVICE_NAME = 'Contacts';
    public const API_VERSION = 1;
    protected ?Contacts\Addressbook $addressbookSvc = null;
    protected ?Contacts\AdminSetting $adminsettingSvc = null;
    protected ?Contacts\Contact $contactSvc = null;
    protected ?Contacts\ExternalSource $externalsourceSvc = null;
    protected ?Contacts\Info $infoSvc = null;
    protected ?Contacts\Label $labelSvc = null;

    /**
     * Summary of addressbook
     *
     * API: SYNO.Contacts.Addressbook
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Addressbook
     * @return Contacts\Addressbook
     */
    public function addressbook()
    {
        $this->addressbookSvc ??= new Contacts\Addressbook($this->client);
        return $this->addressbookSvc;
    }

    /**
     * Summary of adminsetting
     *
     * API: SYNO.Contacts.AdminSetting
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.AdminSetting
     * @return Contacts\AdminSetting
     */
    public function adminsetting()
    {
        $this->adminsettingSvc ??= new Contacts\AdminSetting($this->client);
        return $this->adminsettingSvc;
    }

    /**
     * Summary of contact
     *
     * API: SYNO.Contacts.Contact
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Contact
     * @return Contacts\Contact
     */
    public function contact()
    {
        $this->contactSvc ??= new Contacts\Contact($this->client);
        return $this->contactSvc;
    }

    /**
     * Summary of externalsource
     *
     * API: SYNO.Contacts.ExternalSource
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.ExternalSource
     * @return Contacts\ExternalSource
     */
    public function externalsource()
    {
        $this->externalsourceSvc ??= new Contacts\ExternalSource($this->client);
        return $this->externalsourceSvc;
    }

    /**
     * Summary of info
     *
     * API: SYNO.Contacts.Info
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Info
     * @return Contacts\Info
     */
    public function info()
    {
        $this->infoSvc ??= new Contacts\Info($this->client);
        return $this->infoSvc;
    }

    /**
     * Summary of label
     *
     * API: SYNO.Contacts.Label
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=Contacts#/Contacts.Label
     * @return Contacts\Label
     */
    public function label()
    {
        $this->labelSvc ??= new Contacts\Label($this->client);
        return $this->labelSvc;
    }
}
