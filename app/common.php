<?php
//Check if file array has been declared
if (!isset($files)) {
    throw new Exception("No common file has been declared", 1);
    die();
}
//Only activate when you have composer loaded vendors
// require "vendor/autoload.php";
require "Storage/DB.php";
require "Middleware/Sanitize.php";
require "Middleware/Process.php";


//include all the declared files
foreach ($files as $file)
    require_once "$file.php";
