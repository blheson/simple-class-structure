<?php

namespace Middleware;

class Sanitize
{
    public static function escape($input)
    {
        $input = htmlentities($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }
   
}
