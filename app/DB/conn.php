<?php
Namespace Storage;
class DB
{
    public function __construct()
    {
        $host = "localhost";
        $user = "user";
        $password = "";
        $db_name = "";
        $db = new \mysqli($host, $user, $password, $db_name);
        if (mysqli_connect_errno()) {
            echo 'Database connection failed with following errors: ' . mysqli_connect_error();
            die();
        }
        return $db;
    }
    public static function close($db)
    {
        mysqli_close($db);
    }
}
