<?php
/**
 * 
 */
class Contribution_model extends CI_Model
{
	
	public function contribute($values)
	{
		$sql = "insert into contribution(cid,cname,mname,amount,sdate,edate,created_by) values (?, ?, ?, ?, ?, ?, ?)";
		$querry = $this->db->query($sql, $values);

		if ($query) {
			return "success";
		}else{
			return "false";
		}
	}
}