<?php

class UserModel extends CI_Model
{
	public function appointment_entry($data)
	{
		$this->db->insert("appointment",$data);
		$q=$this->db->insert_id();
		return $q;
	}
}


?>