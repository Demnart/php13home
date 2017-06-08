<?php


class MySql
{

    private $host;
    private $root;
    private $password;
    private $db;


    public function __construct($host = 'localhost',$root = 'root',$password = 'death9393',$db = 'php13')
    {
        $this->host = $host;
        $this->root = $root;
        $this->password = $password;
        $this->db = $db;
    }

    private function connectToDB()
    {
        return mysqli_connect($this->host,$this->root,$this->password,$this->db);
    }


}