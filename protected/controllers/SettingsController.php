<?php


class SettingsController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'settings';
    }
}
