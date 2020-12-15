<?php
if (!isset($files)) {
    throw new Exception("No common file has been declared", 1);
    die();
}
require "vendor/autoload.php";
foreach ($files as $file) {
    require_once "$file.php";
}