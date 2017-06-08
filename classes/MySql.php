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

    public function getDataFromDB($sql,$class = 'stdClass')
    {
        $data=[];
        $resource = $this->connectToDB();
        mysqli_set_charset($resource,"utf8");
        $result = mysqli_query($resource,$sql);

        while (NULL !== $row = mysqli_fetch_object($result,$class))
        {
            $data[] = $row;
        }
        return $data;
    }
}