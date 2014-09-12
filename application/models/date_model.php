<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Date_model extends CI_Model {
    

public function get_date($from,$to){
	$this->db->where('date >=', $from);
	$this->db->where('date <=', $to);
	$this->db->from('ordering');
	$query = $this->db->get();
	return $query->result();
	}	


public function get_dates(){
		$this->db->select('date');
		$this->db->from('ordering');
		$query = $this->db->get();
		return $query->result();
}


}
