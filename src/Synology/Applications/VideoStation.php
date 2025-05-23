<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class VideoStation
 *
 * @package Synology\Applications
 * @deprecated 1.5.4 no longer available on DSM 7.2.2
 */
class VideoStation extends Authenticate
{
    public const API_SERVICE_NAME = 'VideoStation';

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($address, $port = null, $protocol = null, $version = 1, $verifySSL = false)
    {
        parent::__construct(self::API_SERVICE_NAME, self::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * Return Information about VideoStation
     * - is_manager
     * - version
     * - version_string
     */
    public function getInfo()
    {
        return $this->request('Info', 'VideoStation/info.cgi', 'getinfo');
    }

    /**
     * Get a list of objects
     *
     * @param string $type (Movie|TVShow|TVShowEpisode|HomeVideo|TVRecording|Collection|Library)
     * @param int    $limit
     * @param int    $offset
     *
     * @return array
     *
     * @throws Exception
     */
    public function getObjects($type, $limit = 25, $offset = 0)
    {
        $path = '';
        $type = ucfirst($type);
        switch ($type) {
            case 'Movie':
                $path = 'VideoStation/movie.cgi';
                break;
            case 'TVShow':
                $path = 'VideoStation/tvshow.cgi';
                break;
            case 'TVShowEpisode':
                $path = 'VideoStation/tvshow_episode.cgi';
                break;
            case 'HomeVideo':
                $path = 'VideoStation/homevideo.cgi';
                break;
            case 'TVRecording':
                $path = 'VideoStation/tvrecord.cgi';
                break;
            case 'Collection':
                $path = 'VideoStation/collection.cgi';
                break;
            case 'Library':
                $path = 'VideoStation/library.cgi';
                break;
            default:
                throw new Exception('Unknown "' . $type . '" object');
        }

        return $this->request($type, $path, 'list', ['limit' => $limit, 'offset' => $offset]);
    }

    /**
     * Search for Movie|TVShow|TVShowEpisode|HomeVideo|TVRecording|Collection
     *
     * @param string     $name
     * @param string     $type          (Movie|TVShow|TVShowEpisode|HomeVideo|TVRecording|Collection)
     * @param int|number $limit
     * @param int|number $offset
     * @param string     $sortBy        (title|original_available)
     * @param string     $sortDirection (asc|desc)
     *
     * @return array
     *
     * @throws Exception
     */
    public function searchObject($name, $type, $limit = 25, $offset = 0, $sortBy = 'title', $sortDirection = 'asc')
    {
        $path = '';
        $type = ucfirst($type);
        switch ($type) {
            case 'Movie':
                $path = 'VideoStation/movie.cgi';
                break;
            case 'TVShow':
                $path = 'VideoStation/tvshow.cgi';
                break;
            case 'TVShowEpisode':
                $path = 'VideoStation/tvshow_episode.cgi';
                break;
            case 'HomeVideo':
                $path = 'VideoStation/homevideo.cgi';
                break;
            case 'TVRecording':
                $path = 'VideoStation/tvrecord.cgi';
                break;
            case 'Collection':
                $path = 'VideoStation/collection.cgi';
                break;
            default:
                throw new Exception('Unknown "' . $type . '" object');
        }

        return $this->request($type, $path, 'search', [
            'title' => $name,
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => $sortBy,
            'sort_direction' => $sortDirection,
        ], 4);
    }

    /**
     * List all objects of one kind
     *
     * @param string $type
     * @param int $limit
     * @param int $offset
     * @param string $sortby
     * @param string $sortdirection
     * @param string $additional json array as sting
     * @throws Exception
     * @return \stdClass
     */
    public function listObjects($type, $limit = 25, $offset = 0, $sortby = 'added', $sortdirection = 'desc', $additional = '["poster_mtime","summary","watched_ratio","collection"]')
    {
        $path = '';
        $type = ucfirst($type);
        switch ($type) {
            case 'Movie':
                $path = 'VideoStation/movie.cgi';
                break;
            case 'TVShow':
                $path = 'VideoStation/tvshow.cgi';
                break;
            case 'TVShowEpisode':
                $path = 'VideoStation/tvshow_episode.cgi';
                break;
            case 'HomeVideo':
                $path = 'VideoStation/homevideo.cgi';
                break;
            case 'TVRecording':
                $path = 'VideoStation/tvrecord.cgi';
                break;
            case 'Collection':
                $path = 'VideoStation/collection.cgi';
                break;
            default:
                throw new Exception('Unknow "' . $type . '" object');
        }

        return $this->request($type, $path, 'list', [
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => $sortby,
            'sort_direction' => $sortdirection,
            'additional' => $additional,
        ], 4);
    }
}
