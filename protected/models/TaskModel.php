<?php

class TaskModel extends MainModel
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'task';
    }

    public static function getArchive($user)
    {
        // select * from tasks where user=$user and (task_creation_date < today or task_status = completed)
    }

    public static function getBacklog($user)
    {
        // select * from tasks where user_id=$user and category_id is NULL;
    }

    public static function search($user, $data)
    {
        // select * from tasks where user_id=$user and task_name LIKE $data or task_description LIKE $data;
    }
}
