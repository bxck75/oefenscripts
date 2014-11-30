<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of class
 *
 * @author Desktop
 */
class User {
    function system_user($username,$password){
        $sql = "SELECT id as id FROM oef2_Gebruikers WHERE username ='".addslashes($username)."' and password=md5('".addslashes($password)."')";
        $dbc = new dbconnect() ;
        $result = $dbc->fetch_array($sql);
        //HeFu::vardrop($result);
        if($result[0] == 1){
                return new administrator($username,$password);
        }elseif($result[0] > 1){
                return new gebruiker($username,$password);
        }else{
            $msg = 'Er is geen Account gevonden';
            return $msg;
        }
        unset($dbc);
    }
    function build_login(){
        include 'templates/template.login.php';
    }
    function logout(){
        session_destroy();
    }
}
