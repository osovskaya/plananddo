<?php

class SettingsModel extends MainModel
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'settings';
    }
}