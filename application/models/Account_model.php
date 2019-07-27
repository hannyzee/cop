<?php

class Account_model extends CI_Model
{
    public function accounts($values)
    {

        $sql ="insert into accounttype(acctid,acctname,minbalance,fixcharge,dicrip,createdby,datecreated) values(?, ?, ?, ?, ?, ?, ?)";

        $query = $this->db->query($sql, $values);
    
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }
    
    public function view_accountype()
    {
        $query = $this->db->query("select * from accounttype");
        return $query->result();
    }
    //genertin account number
public function getUid($uid = null)
{
    while (! $this->isValid($uid)) {
        $uid = sprintf('%04x%04x%02x', mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xff));
    }
    return $uid;
}


}
?>