<?php


class SubtaskController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'subtask';
    }

    public static function getMany()
    {
        // select * from subtasks where user_id=$user and task_id=$task;
    }
}
