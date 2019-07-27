<?php
/**
 * 
 */
class Members_model extends CI_Model{

	public function reg_members($userid)
	{
		$query = $this->db->query("select * from users WHERE userid = ?", [$userid]);
		return $query->row();
	}
}
