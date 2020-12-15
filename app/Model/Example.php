<?php

namespace Model;

use mysqli_result;
use Storage\DB as DB;

class Example
{
    /**
     * Check if Example class is connected
     */
    public static function check():mysqli_result
    {
        return DB::Conn()->query("Select * From Users");
    }
}
