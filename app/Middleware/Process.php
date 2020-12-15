<?php

namespace Middleware;

class Process
{
    /**
     * Convert object to array
     * @param object $object
     * @return array
     */
    public static function objectToArray(object $object):array
    {
        $store_array = [];
        while ($row = mysqli_fetch_assoc($object)) {
            $store_array[] = $row;
        }
        return $store_array;
    }
}
