<?php
	interface system_user_interface{
		public function login();
		public function logout();
	}
	class gebruiker extends system_user{
		public function login(){
			echo "gebruiker is ingelogd";
		}
		public function logout(){
			echo "gebruiker is uitgelogd";
		}
		public function whois(){
			echo "ik ben een gebruiker";
		}
	}

	
	class administrator extends system_user{
		public function login(){
			echo "admin is ingelogd";
		}
		public function logout(){
			echo "admin is uitgelogd";
		}
		public function whois(){
			echo "ik ben een admin";
		}
	}

	class system_user implements system_user_interface{
            
                public function __construct($username,$password){
                        if($username == "admin" && $password == "demodemo") {
                                return new administrator;
                        }else{
                                return new gebruiker;
                        }
                }
        }
	$user = system_user('admin','12345');
	$user->whois();
	$user->logout();
	

	