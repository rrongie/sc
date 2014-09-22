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

public function get_tots(){
		$this->db->select('*');
		$this->db->from('ordering');
		$query = $this->db->get();
		return $query->result();
} 


public function get_edit($id){
	
	$sql = $this->db->where('id', $id)->get('ordering');
	return $sql->result();
}

public function get_income(){
	$this->db->select_sum('total');
	$this->db->from('ordering');
	$query = $this->db->get();
	return $query->result();
}

public function test(){
 $sql = $this->db->get('ordering');
    return $sql->result_array();

}

}
