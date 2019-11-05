<?php

namespace BreadAndIfit;

class DbConnector
{
    public static function getDatabase() {
        $db = new \PDO ('mysql:host=db; dbname=ingredients', 'root', 'password');

        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}


