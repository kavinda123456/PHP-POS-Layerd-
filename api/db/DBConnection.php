<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:33 PM
 */
?>
<?php

class DBConnection{
    private $host="localhost";
    private $username="root";
    private $password="0784903341k";
    private $database="phppos";
    private $port="3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection=new mysqli($this->host,$this->username,$this->password,$this->database,$this->port);
        if ($this->connection->connect_error){
            echo $this->connection->connect_error;
            die();
        }
    }

    public function getConnection(){
        return $this->connection;
    }

}
