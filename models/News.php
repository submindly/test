<?php


class News extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = 'news';
    protected static $class = 'News';
    /*
    public static function getAll()
    {
        $db = new DB;
        return $db->query('SELECT * FROM news', 'News');
    }
*/
/*
    public static function getOne($id)
    {
        $db = new DB;
        return $db->query('SELECT * FROM news WHERE id = ' . $id)[0];
    }
*/
}