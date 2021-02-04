<?php

namespace Model;

use mysqli_result;
use Storage\DB as DB;

class Example
{
    /**
     * Check if Example class is connected
     * @return mysqli_result|bool|null
     */
    public static function check()
    {
        
        try {
           return DB::Conn()->query("Select * From Users");
        } catch (\Error $e) {
            echo $e->getMessage();
            die();
        }
        
    }
}
