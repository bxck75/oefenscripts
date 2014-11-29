<?php

/**
 * Description of system_user
 *
 * @author Desktop
 */
            //AUTOLOADER//
//classes automatisch ophalen uit de classes map

class gebruiker implements system_user_interface{
		public function __construct($username,$password){
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = sha1($password);
                        $_SESSION['HYPER'] = 'No';
			echo "gebruiker is ingelogd";
		}
		public function logout(){
                        session_destroy();
			echo "gebruiker is uitgelogd";
		}
		public function whois(){
			echo "ik ben een gebruiker";
		}
	}
