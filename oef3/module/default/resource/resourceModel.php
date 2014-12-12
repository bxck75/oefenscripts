<?php
class resourceModel extends Model{
        // haal alle resources uit resource table
	public function getResources(){
		$sql = "SELECT * FROM resource ORDER BY rate ASC";
		
		$result = $this->db->query($sql);
		
		return $result->rows;
	}
        // voeg een resource toe
	public function insertResource($name,$rate,$description,$type){
		$sql = "INSERT INTO resource(name,rate,description,type) VALUES ('".$name."','".$rate."','".$description."','".$type."');";
		
		$result = $this->db->query($sql);
		
		return $this->db->getLastId();
	}
        // delete een resource 
	public function deleteResource($resource_id){
		$sql = "DELETE FROM resource WHERE resource_id = $resource_id;";
		
		$result = $this->db->query($sql);
		
		return $this->db->countAffected();
	}
        //  update an resource op id
	public function updateResources($resource_id,$name,$rate,$description,$type){
		$sql = "UPDATE resource SET name='".$name."',start_date='".$rate."',end_date='".$description."',price='".$type."'  WHERE resource_id=".$resource_id.";";
		
		$result = $this->db->query($sql);
		
		return $this->db->countAffected();
	}
        // check een resource op id
	public function getResource($resource_id){
		$sql = "SELECT * FROM resource WHERE resource_id=".$resource_id.";";
		
		$result = $this->db->query($sql);
		
		return $result->row;
	}

}