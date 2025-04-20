<?php

namespace Synology\Services;

/**
 * Class TextEditor - created automatically by ServiceGenerator
 *
 * API: SYNO.TextEditor
 * ```
 * $result = $syno->texteditor()->preference()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=TextEditor
 * @package Synology\Services
 */
class TextEditor extends BaseService
{
    public const API_SERVICE_NAME = 'TextEditor';
    public const API_VERSION = 1;
    protected ?TextEditor\Preference $preferenceSvc = null;

    /**
     * Summary of preference
     *
     * API: SYNO.TextEditor.Preference
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=TextEditor#/TextEditor.Preference
     * @return TextEditor\Preference
     */
    public function preference()
    {
        $this->preferenceSvc ??= new TextEditor\Preference($this->client);
        return $this->preferenceSvc;
    }
}
