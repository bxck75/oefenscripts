<?php
/**
 * Description of class
 *
 *
 *####Helpfuncties####
 *
 *
 * @author B.X.C.Kooij
 **/

class HeFu {
    public $data ;
    public function vardrop($data,$pre = true,$die = false){
        if($pre == true){echo '<pre>';}
        var_dump($data);
        if($pre == true){echo '</pre>';}
        if($die == true){die('Killed on request!');}
    }
    public function schrijf($data,$pre = true,$die = false){
        if($pre == true){echo '<pre>';}
        echo $data;
        if($pre == true){echo '</pre>';}
        if($die == true){die('Killed on request!');}
    }
}