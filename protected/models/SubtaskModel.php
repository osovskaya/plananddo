<?php

class SubtaskModel extends MainModel
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'subtask';
    }
}