<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class administrator implements system_user_interface{
		public function __construct($username,$password){
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = sha1($password);
                        $_SESSION['HYPER'] = 'Yes';
			return("admin is ingelogd");
		}
		public function logout(){
                        session_destroy();
			echo "admin is uitgelogd";
		}
		public function whois(){
			echo "Admin";
		}
	}