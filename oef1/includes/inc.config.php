<?php
define(DB_USERNAME, 'boudewijn_main');
define(DB_HOST, 'localhost');
define(DB_PASS, '0o9i8u7y');
define(DB_NAME, 'boudewijn_OOP');
define(APP_BASE_URL, $_SERVER['DOCUMENTROOT']);


//connecting to mysql server
$dbc = new dbconnect() ;
//changinh database
$dbc->change_base(DB_NAME) or die (mysql_error()."oops! Could not switch database!");
echo APP_BASE_URL;
?>

