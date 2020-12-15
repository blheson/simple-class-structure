<?php
// Model should come first
//"Model/**"
//"Controller/**"

use Controller\Example as Example;


$files = array(
    "Model/Example",
    "Controller/Example_controller"
);

try {
    require_once "../app/common.php";
} catch (Exception $e) {
    $e->getMessage();
};
//Check to get 
var_dump(Example::check());