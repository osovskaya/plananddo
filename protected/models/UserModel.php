<?php

class UserModel extends MainModel
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
    }

    public static function getOne($id)
    {
        // select * from $tableName where id=$id;
    }

    public static function add($parameters)
    {
        // insert into $tableName () values ();
    }

    public static function update($id, $parameters)
    {
        // update $tableName set key=value where $tableName_id = $id;
    }

    public static function delete($id)
    {
        // delete from $tableName where $tableName_id = $id;
    }

    public static function authorize($id, $password)
    {
        // select * from $tableName where user_id=$id and password=$password;
    }

    public static function checkEmail($email)
    {
        // select * from $tableName where email=$email;
    }
}