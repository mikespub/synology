<?php

namespace Synology\Services;

/**
 * Class DR - created automatically by ServiceGenerator
 *
 * API: SYNO.DR
 * ```
 * $result = $syno->dr()->node()->listCredential();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DR
 * @package Synology\Services
 */
class DR extends BaseService
{
    public const API_SERVICE_NAME = 'DR';
    public const API_VERSION = 1;
    protected ?DR\Node $nodeSvc = null;

    /**
     * Summary of node
     *
     * API: SYNO.DR.Node
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=DR#/DR.Node
     * @return DR\Node
     */
    public function node()
    {
        $this->nodeSvc ??= new DR\Node($this->client);
        return $this->nodeSvc;
    }
}
