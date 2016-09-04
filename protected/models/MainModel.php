<?php

class MainModel
{
    private static $db;
    private static $tableName;
    private static $fields;
    private static $validationRules;

    public function __construct()
    {

    }

    public static function getOne($id, $user)
    {
        // select * from $tableName where id=$id and user_id=$user;

    }

    public static function getMany($user, $filter=false, $offset=0)
    {
        // select * from $tableName where user_id=$user and $filter[key]=$filter[$value] offset=$offset;
    }

    public static function add($parameters)
    {
        // insert into $tableName () values ();
    }

    public static function update($user, $id, $parameters)
    {
        // update $tableName set key=value where $tableName_id = $id and user_id=$user;

    }

    public static function delete($user, $id)
    {
        // delete from $tableName where $tableName_id = $id and user_id=$user;
    }
}