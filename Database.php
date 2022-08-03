<?php

class Database
{
    static $db;
    function connect()
    {
        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $database = "hdwallpaper";
        if (static::$db == NULL) {
            static::$db = new mysqli(
                $server, $db_username, $db_password, $database);
        }
        return self::$db;
    }

}