<?php

/* 
 * 
 * define de DOCUMENTROOT
 * define de DB_HOST,DB_USER,DB_PASS en DB_NAME
 * 
 */
//Defines hier

define(BASEFOLDER,'/netprojects/oef2/');
define(DB_USERNAME, 'boudewijn_main');
define(DB_HOST, 'localhost');
define(DB_PASS, '0o9i8u7y');
define(DB_NAME, 'boudewijn_OOP');
define(APP_BASE_URL, $_SERVER['DOCUMENTROOT']);

            //AUTOLOADER//
//classes automatisch ophalen uit de classes map
function __autoload($class_name)
{
    if (file_exists("classes/class.$class_name.php"))
    {
        require_once "classes/class.$class_name.php";
    }else{echo'can not load';}
}

session_start();


     

        


