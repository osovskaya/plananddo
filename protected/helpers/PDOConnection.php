<?php


class PDOConnection
{
    protected static $instance = null;
    protected $PDOconnection = null;
    protected $PDOStatement = null;

    /**
     *
     * PDOConnection constructor.
     */
    private function __construct() {}

    /**
     * @return null|PDOConnection
     */
    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new PDOConnection();
        }
        return self::$instance;
    }

    /**
     * @return bool|null|PDO
     */
    public function getConnection()
    {

    }

    /**
     * @param $sql
     * @return PDOStatement
     */
    public function prepareStatement($sql)
    {
        try
        {
            $this->PDOStatement = $this->PDOconnection->prepare($sql);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
        return $this->PDOStatement;
    }

    /**
     * @param $parameters
     * @return mixed
     */
    public function executeStatement($parameters=null)
    {
        if (is_null($parameters)) return $this->PDOStatement->execute();
        return $this->PDOStatement->execute($parameters);
    }

    public function error()
    {
        return $this->PDOStatement->errorInfo();
    }

    /**
     * @param int $fetch_style
     * @return mixed
     */
    public function fetchOne($fetch_style = PDO::FETCH_ASSOC)
    {
        return $this->PDOStatement->fetch($fetch_style);
    }

    /**
     * @param int $fetch_style
     * @return mixed
     */
    public function fetchMany($fetch_style = PDO::FETCH_ASSOC)
    {
        return $this->PDOStatement->fetchAll($fetch_style);
    }

    /**
     * @return mixed
     */
    public function getLastInsertID($name)
    {
       return $this->PDOconnection->lastInsertID($name);
    }
}