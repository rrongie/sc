<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ordering_model extends CI_Model {
    

public function insert_oder($data){
        $this->db->insert('ordering', $data);
    }


public function get_orders(){
    $sql = $this->db->get('ordering');
    return $sql->result_array();
}

public function delete_order_mo($id){
		
	$this->db->where('id',$id);
	$result= $this->db->delete('ordering');
	return $result;
	}


}