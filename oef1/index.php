<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'includes/inc.config.php';
function __autoload($class_name)
{
    if (file_exists("classes/class.$class_name.php"))
    {
        require_once "classes/class.$class_name.php";
    }
}
$db = new dbconnect();
$sql = "SHOW PROCESSLIST";
$result = $db->fetch_array($sql);