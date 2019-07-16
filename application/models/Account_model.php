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


}
?>