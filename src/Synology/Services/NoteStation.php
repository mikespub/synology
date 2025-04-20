<?php

namespace Synology\Services;

/**
 * Class NoteStation - created automatically by ServiceGenerator
 *
 * API: SYNO.NoteStation
 * ```
 * $result = $syno->notestation()->info()->get();
 * ```
 * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation
 * @package Synology\Services
 */
class NoteStation extends BaseService
{
    public const API_SERVICE_NAME = 'NoteStation';
    public const API_VERSION = 3;
    protected ?NoteStation\Info $infoSvc = null;
    protected ?NoteStation\Note $noteSvc = null;
    protected ?NoteStation\Notebook $notebookSvc = null;
    protected ?NoteStation\Setting $settingSvc = null;
    protected ?NoteStation\Share $shareSvc = null;
    protected ?NoteStation\Shortcut $shortcutSvc = null;
    protected ?NoteStation\Smart $smartSvc = null;
    protected ?NoteStation\Tag $tagSvc = null;
    protected ?NoteStation\Todo $todoSvc = null;

    /**
     * Summary of info
     *
     * API: SYNO.NoteStation.Info
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Info
     * @return NoteStation\Info
     */
    public function info()
    {
        $this->infoSvc ??= new NoteStation\Info($this->client);
        return $this->infoSvc;
    }

    /**
     * Summary of note
     *
     * API: SYNO.NoteStation.Note
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Note
     * @return NoteStation\Note
     */
    public function note()
    {
        $this->noteSvc ??= new NoteStation\Note($this->client);
        return $this->noteSvc;
    }

    /**
     * Summary of notebook
     *
     * API: SYNO.NoteStation.Notebook
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Notebook
     * @return NoteStation\Notebook
     */
    public function notebook()
    {
        $this->notebookSvc ??= new NoteStation\Notebook($this->client);
        return $this->notebookSvc;
    }

    /**
     * Summary of setting
     *
     * API: SYNO.NoteStation.Setting
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Setting
     * @return NoteStation\Setting
     */
    public function setting()
    {
        $this->settingSvc ??= new NoteStation\Setting($this->client);
        return $this->settingSvc;
    }

    /**
     * Summary of share
     *
     * API: SYNO.NoteStation.Share
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Share
     * @return NoteStation\Share
     */
    public function share()
    {
        $this->shareSvc ??= new NoteStation\Share($this->client);
        return $this->shareSvc;
    }

    /**
     * Summary of shortcut
     *
     * API: SYNO.NoteStation.Shortcut
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Shortcut
     * @return NoteStation\Shortcut
     */
    public function shortcut()
    {
        $this->shortcutSvc ??= new NoteStation\Shortcut($this->client);
        return $this->shortcutSvc;
    }

    /**
     * Summary of smart
     *
     * API: SYNO.NoteStation.Smart
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Smart
     * @return NoteStation\Smart
     */
    public function smart()
    {
        $this->smartSvc ??= new NoteStation\Smart($this->client);
        return $this->smartSvc;
    }

    /**
     * Summary of tag
     *
     * API: SYNO.NoteStation.Tag
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Tag
     * @return NoteStation\Tag
     */
    public function tag()
    {
        $this->tagSvc ??= new NoteStation\Tag($this->client);
        return $this->tagSvc;
    }

    /**
     * Summary of todo
     *
     * API: SYNO.NoteStation.Todo
     * @see https://github.mikespub.net/synology/tools/?urls.primaryName=NoteStation#/NoteStation.Todo
     * @return NoteStation\Todo
     */
    public function todo()
    {
        $this->todoSvc ??= new NoteStation\Todo($this->client);
        return $this->todoSvc;
    }
}
