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
//$sql = "SHOW COLUMNS FROM oef1_tblTest";
//$result = $dbc->fetch_array($sql);
//HeFu::vardrop($result);
$sql = "SELECT max(id) as highest_id FROM oef1_tblTest";
$result = $dbc->fetch_array($sql);
//HeFu::vardrop($result);
$result = $result['highest_id'] + 1;
HeFu::schrijf($result);
$sql = "INSERT INTO `oef1_tblTest`(`titel`, `inhoud`, `datum`) "
        . "VALUES ('entry #".$result."', 'testing', '2014-11-27 00:00:00');";
$dbc->query($sql);