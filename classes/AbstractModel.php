<?php


class AbstractModel
{

    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB();
        $sql ="SELECT * FROM " . static::$table;
        return $db->getAllDataFromDB($sql,static::class);
    }
}