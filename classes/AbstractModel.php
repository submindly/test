<?php

abstract class AbstractModel
{

    protected static $table;

    public static function getAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function getOne($id)
    {
        $db = new DB;
        $sql = 'SELECT * FROM '. static::$table .' WHERE id = :id';
        return $db->query($sql, [':id' => $id]);
    }
}