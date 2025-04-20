<?php

namespace Synology\Services;

/**
 * Class SecureSignIn - created automatically by ServiceGenerator
 *
 * API: SYNO.SecureSignIn
 * ```
 * $result = $syno->securesignin()->amfa()->getPolicy();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn
 * @package Synology\Services
 */
class SecureSignIn extends BaseService
{
    public const API_SERVICE_NAME = 'SecureSignIn';
    public const API_VERSION = 1;
    protected ?SecureSignIn\AMFA $amfaSvc = null;
    protected ?SecureSignIn\Authenticator $authenticatorSvc = null;
    protected ?SecureSignIn\Fido $fidoSvc = null;
    protected ?SecureSignIn\Method $methodSvc = null;
    protected ?SecureSignIn\Package $packageSvc = null;

    /**
     * Summary of amfa
     *
     * API: SYNO.SecureSignIn.AMFA
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.AMFA
     * @return SecureSignIn\AMFA
     */
    public function amfa()
    {
        $this->amfaSvc ??= new SecureSignIn\AMFA($this->client);
        return $this->amfaSvc;
    }

    /**
     * Summary of authenticator
     *
     * API: SYNO.SecureSignIn.Authenticator
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Authenticator
     * @return SecureSignIn\Authenticator
     */
    public function authenticator()
    {
        $this->authenticatorSvc ??= new SecureSignIn\Authenticator($this->client);
        return $this->authenticatorSvc;
    }

    /**
     * Summary of fido
     *
     * API: SYNO.SecureSignIn.Fido
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Fido
     * @return SecureSignIn\Fido
     */
    public function fido()
    {
        $this->fidoSvc ??= new SecureSignIn\Fido($this->client);
        return $this->fidoSvc;
    }

    /**
     * Summary of method
     *
     * API: SYNO.SecureSignIn.Method
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Method
     * @return SecureSignIn\Method
     */
    public function method()
    {
        $this->methodSvc ??= new SecureSignIn\Method($this->client);
        return $this->methodSvc;
    }

    /**
     * Summary of package
     *
     * API: SYNO.SecureSignIn.Package
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=SecureSignIn#/SecureSignIn.Package
     * @return SecureSignIn\Package
     */
    public function package()
    {
        $this->packageSvc ??= new SecureSignIn\Package($this->client);
        return $this->packageSvc;
    }
}
