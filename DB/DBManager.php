<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 27.06.2017
 * Time: 20:13
 */
class DBManager{
    const DB_HOST = 'localhost';
    const DB_NAME = 'test';
    const DB_USER_NAME = 'root';
    const DB_USER_PASSWORD = '';

    private static $db = null;
    private $connection;

    private function __construct()
    {
        $this->connection = new mysqli(self::DB_HOST,self::DB_USER_NAME,self::DB_USER_PASSWORD,self::DB_NAME);
        $this->connection->query("SET lc_time_names = 'ru_RU'");
        $this->connection->query("SET NAMES 'utf8'");

    }

    public  function __destruct()
    {
        // TODO: Implement __destruct() method.
        if ($this->connection) {
            $this->connection->close();
        }
    }

    public static function getDB(){
        if (self::$db == null) {
            self::$db = new DBManager();
        }
        return self::$db;
    }

    public function getUsers(){
        $sql = 'SELECT * FROM users';
        $result = $this->connection->query($sql);
        while($row = $result->fetch_assoc()){
            echo "id= ".$row["id"]."; name = ".$row["name"].";<br>";
        }
    }

    public function getAllData($tableName){
        $sql = "SELECT * FROM $tableName";
        $result = $this->connection->query($sql);
        $array = array();
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;
    }

    public function getFieldByID($tableName,$id){
        $id = (int)$id;
        $sql = "SELECT * FROM $tableName WHERE id = $id LIMIT 1";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }

}