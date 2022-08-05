<?php

class Demo
{

    static $db;

    function connect()
    {
        $server = "sql.freedb.tech";
        $db_username = "freedb_underroot";
        $db_password = '26Ke2xWThh4R$WJ';
        $database = "freedb_fpolyhn";
        if (static::$db == NULL) {
            static::$db = new mysqli(
                $server, $db_username, $db_password, $database);
        }
        return self::$db;
    }

}



