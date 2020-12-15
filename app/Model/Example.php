<?php

namespace Model;
use Storage\DB;
class Example
{
    /**
     * Check if Example class is connected
     */
    public static function check(): string
    {
        return "I am a method from the Example namespace";
    }
}
