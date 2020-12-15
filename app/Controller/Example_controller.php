<?php

namespace Controller;

use Model\Example as eg;
use Middleware\Process as Process;
class Example
{
    /**
     * Introduce the method introduce 
     */
    public static function introduce(): string
    {
        return "Hello, I am a method in class Controller/Example";
    }
    public static function check(): array
    {
        return Process::objectToArray(eg::check());
    }
}
