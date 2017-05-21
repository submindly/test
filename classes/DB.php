<?php


class DB
{
    private $dbh;
    private $className;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', 'user');

    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function query($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
}