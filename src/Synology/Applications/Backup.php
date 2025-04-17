<?php

namespace Synology\Applications;

use Synology\Api\Authenticate;
use Synology\Exception;

/**
 * Class Backup
 *
 * ```
 * $synology = new Synology\Applications\Backup($api_host, $api_port, $api_http, 1);
 * $synology->connect($api_user, $api_pass);
 * $tasks = $synology->listTasks();
 * foreach ($tasks->task_list as $task) {
 *     $info = $synology->getTask($task->task_id);
 * }
 * ```
 *
 * @package Synology\Applications
 */
class Backup extends Authenticate
{
    public const API_SERVICE_NAME = 'Backup';
    public const API_VERSION = 1;

    /**
     * Info API setup
     *
     * @param string  $address
     * @param ?int    $port
     * @param ?string $protocol
     * @param ?int    $version @deprecated can vary per api method
     * @param bool    $verifySSL
     */
    public function __construct($address, $port = null, $protocol = null, $version = self::API_VERSION, $verifySSL = false)
    {
        parent::__construct(static::API_SERVICE_NAME, static::API_NAMESPACE, $address, $port, $protocol, $version, $verifySSL);
    }

    /**
     * List Backup Tasks
     *
     * @param int    $limit
     * @param int    $offset
     *
     * @return array
     */
    public function listTasks($limit = 25, $offset = 0)
    {
        $type = 'Task';
        $path = static::API_PATH;
        $method = 'list';
        $params = [
            'limit' => $limit,
            'offset' => $offset,
        ];
        $version = static::API_VERSION;

        return $this->_request($type, $path, $method, $params, $version);
    }

    /**
     * Get Backup Task
     *
     * @param int    $taskId
     *
     * @return \stdClass
     */
    public function getTask($taskId)
    {
        $type = 'Task';
        $path = static::API_PATH;
        $method = 'get';
        $params = [
            'task_id' => $taskId,
        ];
        $version = static::API_VERSION;

        return $this->_request($type, $path, $method, $params, $version);
    }
}
