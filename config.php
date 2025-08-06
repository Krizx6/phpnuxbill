<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || 
             (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";

// Check if HTTP_HOST is set, otherwise use a default value or SERVER_NAME
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost');

$baseDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
define('APP_URL', $protocol . $host . $baseDir);


$_app_stage = 'Live'; # Do not change this

$db_host    = "mysql"; # Database Host
$db_port    = "3306";   # Database Port. Keep it blank if you are un sure.
$db_user    = "nuxbill"; # Database Username
$db_pass    = "123456789"; # Database Password
$db_name    = "nuxbill"; # Database Name




//error reporting
if($_app_stage!='Live'){
    error_reporting(E_ERROR);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}else{
    error_reporting(E_ERROR);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}
