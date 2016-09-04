<?php


class UserController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
    }

    public static function login()
    {
        // check if user has been already logged in
        // show login page
    }

    public static function authorize()
    {
        // find user with login
        // check password
        // redirect to start page
    }

    public static function logout()
    {
        // clear all data for user
        // redirect to registration page
    }

    public static function getOne($id)
    {
        // select * from users where id=$id
    }

    public static function add()
    {
        // insert into users () values ()
    }

    public static function update($id)
    {
        // get user by $id
        // update users set key=value,... where id=$id
    }

    public static function delete($id)
    {
        // get user by $id
        // delete from users where id=$id
    }

    public static function changePassword($email)
    {
        // send letter with link to update user's password
    }
}
