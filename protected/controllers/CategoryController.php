<?php


class CategoryController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'category';
    }
}
