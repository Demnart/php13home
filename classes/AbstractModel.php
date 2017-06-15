<?php


class AbstractModel
{
    static protected $table;


    public static function findALL()
    {
        $class = get_called_class();
        $sql = ' SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->querry($sql);
    }

    public static function findOneByPK($id)
    {
        $class = get_called_class();
        $sql = ' SELECT * FROM ' . static::$table .' WHERE id= :id ';
        $db = new DB();
        $db->setClassName($class);
        return $db->querry($sql,[':id' => $id]);
    }
}