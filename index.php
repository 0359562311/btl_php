<?php
ob_start();
session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
require_once("./mvc/Bridge.php");
try {
    $myApp = new App();
} catch (Exception $e) {
    echo $e;
}
?>