<?php
class Auth_model extends CI_Model{
 
  public function register_user($values)
  {
  	$sql = "insert into users(userid,eemail,pword) values(?, ?, ?)";
  	$query = $this->db->query($sql, $values);
  	if($query)
  		return 'sucess';
  	else
  		return 'failed';
  }
 
}