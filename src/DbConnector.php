<?php

namespace BreadAndIfit;

class DbConnector
{
    /**
     * This methods establishes a connection to the database
     *
     * @return \PDO returns a PDO connection to the database
     */
    public static function getDatabase(): \PDO {
        $db = new \PDO ('mysql:host=db; dbname=ingredients', 'root', 'password');

        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}



