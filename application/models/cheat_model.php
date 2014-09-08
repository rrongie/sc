<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cheat_model extends CI_Model {
    

	
	public function check_user_exist($usr)
    {
		
        $this->db->where("username",$usr);
        $query=$this->db->get("user");
        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function get_account ($id){

    $query = $this->db->where('id', $id)->get('user');
    return $query->result();
    }

    public function get_position (){
    $sql = $this->db->get('position');
    return $sql->result_array();   
    }

    public function get_test(){
        $sql= $this->db->get('test');
        return $sql->result_array();
    }

}
