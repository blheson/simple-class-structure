<?php

namespace Controller;
Use Model\Example as eg;
class Example
{
    /**
     * Introduce the method introduce 
     */
    public static function introduce(): void
    {
        print_r("Hello, I am a method in class Example");
    }
    public static function getExampleModel(): void
    {
        print_r(eg::check());
    }
}
