<?php
// Model should come first
//"Model/**"
//"Controller/**"
$files = array(
    "Model/Example",
    "Controller/Example"
);

try {
    require_once "common.php";
} catch (Exception $e) {
    $e->getMessage();
};
