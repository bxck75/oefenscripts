<?php


class datahandler {
    function alleitemshalen($hyper=0,$ouder=0){
        $dbc = new dbconnect() ;
        //using a simple query and fetch_array method
        $query = "SELECT * FROM oef2_Nav_items WHERE HYPER=".$hyper." AND ouder_id=".$ouder.";";
        $result = $dbc->query($query);
        while($record = $result->fetch_array()){
        
            $array[$record['cont_id']] = $record;
            //HeFu::vardrop($array);
            //array_push($array, count($record));
        }
        return $array;
    }
    function get_maxid(){
        $dbc = new dbconnect() ;
        //using a simple query and fetch_array method
        $query = "SELECT MAX(ouder_id) AS hilevel FROM oef2_Nav_items;";
        $result = $dbc->query($query);
        $record = $result->fetch_array();
        return $record;
    }
    
    function allecontenthalen($cid){
        $dbc = new dbconnect() ;
        //using a simple query and fetch_array method
        $query = "SELECT * FROM oef2_Content WHERE CID=".$cid.";";
        $result = $dbc->query($query);
        while($record = $result->fetch_array()){
        $array[] = $record;
        }
        return $array;
    }
    function iteminschieten($titel,$inhoud){
        $dbc = new dbconnect() ;
        //using a simple query and fetch_array method
        $query = "INSERT INTO oef2_Nav_items(`id` ,`naam` ,`cont_id` ,`ouder_id` ,`HYPER`)"
                . "VALUES ('','".$titel."','".$inhoud."',CURDATE(),'');";
        $result = $dbc->query($query);
        
    }
    function search($searchstring){
        if($searchstring != ""){
            $searchsql="SELECT * FROM oef2_Nav_items WHERE ";
            $dbc = new dbconnect() ;
            //using a simple query and fetch_array method
            
            $result = $dbc->query($searchsql);
            while($record = $result->fetch_array()){
            $array[] = $record;
            }
            return $array;
        }
        
    }
}
