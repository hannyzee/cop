<?php
/**
 * 
 */
class Loan_model extends CI_Model
{
	
	public function loan_request($values)
	{
		$sql = "insert into loan(loan_id,loan_date,amount,user_id,duration) values (?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, $values);
		if ($query) {
			return "sucess";
		}
		else{
			return "false";
		}
	}

	public function view_loanrequest()
	{
		$query = $this->db->query("select * from loan");
		return $query->result();
	}

	public function approve_loan($loan_id)
	{
		$query = $this->db->query("select * from loan WHERE loan_id = ?", [$loan_id]);
		return $query->row();
	}


}