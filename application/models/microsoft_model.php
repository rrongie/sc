<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Microsoft_model extends CI_Model {
    

public function get_to_word(){
		$this->db->select('*');
		$this->db->from('ordering');
		$query = $this->db->get();
		return $query->result();
}



}
