<?php

namespace Storage;

use mysqli;

class DB
{

    /**
     * Connect to Database
     * @return mysqli
     */
    public static function conn(): mysqli
    {
        //Database consfiguration
        $host = "localhost";
        $user = "root";
        $password = "";
        $db_name = "natural";

        $db = new \mysqli($host, $user, $password, $db_name);

        if (mysqli_connect_errno()) {
            echo 'Database connection failed with following errors: ' . mysqli_connect_error();
            die();
        }

        return $db;
    }
    public static function close($db): void
    {
        $db->close();
    }
}
