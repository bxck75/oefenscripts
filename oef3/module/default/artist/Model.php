<?php
class artistModel extends Model{
        // haal alle artists uit artist table
	public function getArtists(){
		$sql = "SELECT * FROM artist ORDER BY name ASC";
		
		$result = $this->db->query($sql);
		
		return $result->rows;
	}
        // voeg een artist toe
	public function insertArtist($name,$rate){
		$sql = "INSERT INTO artist(name,rate) VALUES ('".$name."','".$rate."');";
		
		$result = $this->db->query($sql);
		
		return $this->db->getLastId();
	}
        // delete een artist 
	public function deleteArtist($artist_id){
		$sql = "DELETE FROM artist WHERE artist_id = $artist_id;";
		
		$result = $this->db->query($sql);
		
		return $this->db->countAffected();
	}
        //  update an artist op id
	public function updateArtists($artist_id,$name,$startdate,$enddate,$price){
		$sql = "UPDATE artist SET name='".$name."',start_date='".$startdate."',end_date='".$enddate."',price='".$price."'  WHERE artist_id=".$artist_id.";";
		
		$result = $this->db->query($sql);
		
		return $this->db->countAffected();
	}
        // check een artist op id
	public function getArtist($artist_id){
		$sql = "SELECT * FROM artist WHERE artist_id=".$artist_id.";";
		
		$result = $this->db->query($sql);
		
		return $result->row;
	}

}