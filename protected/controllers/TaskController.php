<?php


class TaskController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'task';
    }

    public static function getArchive()
    {
        // get tasks from Model
        // return data in json
    }

    public static function getDefault()
    {
        // get settings from Model
        // get tasks from Model
        // return data in json
    }

    public static function getBacklog()
    {
        // get tasks from Model
        // return data in json
    }

    public static function search()
    {
        // search for tasks
        // return data in json
    }
}
