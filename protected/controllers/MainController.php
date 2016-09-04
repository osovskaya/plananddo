<?php


class MainController
{
    private static $tableName;

    public function __construct()
    {

    }

    /**
     * @request_example {"task_id": "4"}
     *
     */
    public static function getOne()
    {
        // get object from Model
        // return data in json
    }

    /*
     * @request_example {"filter: {"task_creation_date": "today/tomorrow/week"}, "}
     *                 {"filter: {"category_id": "1"}, "}
     */
    public static function getMany()
    {
        // get object from Model
        // return data in json
    }

    /**
     * @request_example {"user_id": "1", "category_id": "2", "task_type": "list", "task_name": "call mom",
     *        "task_description": "+380731111111", "task_priority": "high", "task_reminder_time": "124556987"}
     */
    public static function add()
    {
        // save object to Model
        // return data in json
    }

    /**
     * @request_example {"task_id": "5", "status": "done"}
     */
    public static function update()
    {

    }

    /**
     * @request_example {"task_id": "4"}
     *
     */
    public static function delete()
    {

    }
}
