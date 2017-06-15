<?php


class DB
{
    private $dbh;
    private $classname;


    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=php13;host=localhost', 'root', 'death9393');
        $this->dbh->exec('Set charset utf8');
    }

    public function setClassName($className)
    {
        $this->classname = $className;
    }

    public function querry($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS,$this->classname);

    }
}