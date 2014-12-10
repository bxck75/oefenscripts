<?php
class eventModel extends Model{
	public function getEvents(){
		$sql = "SELECT * FROM event ORDER BY start_date ASC";
		
		$result = $this->db->query($sql);
		
		return $result->rows;
	}
}