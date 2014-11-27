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
class HeFu {
    public $data = '';
    public function var_drop($data,$pre = true,$die = false){
        //$this->data = $data;
        if($pre == true){echo '<pre>';}
          var_dump($data);if($die == true){die('Killed on request!');}
        if($pre == true){echo '</pre>';}
        
    }
//put your code here
}
