<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Controller {



public function retrieve_products(){
	$query = $this->db->get('item'); // Select the table products
            return $query->result_array();
}
public function get($id){
		$this->db->where('id', $id);
		$sql = $this->db->get('item');
		
		return $sql->result_array();
}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */