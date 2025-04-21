<?php

namespace Synology\Admin;

use Synology\Services\ServicesClient;
use Synology\Tools\ConfigFiles;
use Synology\Exception;

/**
 * Class DataProtection
 * @todo add specific use cases
 *
 * @package Synology\Admin
 */
class DataProtection
{
    use ConfigFiles;

    protected ?ServicesClient $client = null;

    /**
     * Summary of getSynoClient
     * @return ServicesClient
     */
    protected function getSynoClient()
    {
        $this->client ??= $this->getServicesClient();
        return $this->client;
    }

    /**
     * Summary of checkStatus
     * @return array<string, mixed>
     */
    public function checkStatus()
    {
        // @todo get status of Hyper Backup, CloudSync etc.
        $result = [];
        return $result;
    }

    public function getBackupStatus()
    {
        $syno = $this->getSynoClient();
        $result = $syno->backup()->task()->list();
        $taskList = $result->task_list;
        foreach ($taskList as $id => $task) {
            $result = $syno->backup()->task()->get($task->task_id);
            $taskList[$id] = array_replace($taskList[$id], $result);
            $result = $syno->backup()->task()->status($task->task_id);
            $taskList[$id] = array_replace($taskList[$id], $result);
        }
        return $taskList;
    }
}
