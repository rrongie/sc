<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model {
    

public function get_results($term){
	$q=$this->db->select('*')
    	->from('ordering')
    	->like('name', $term)
    	->or_like('order', $term)
   		
   		->or_like('date', $term);
   		//$this->db->limit($limit);
			$ret['rows']= $q->get()->result();
    	
  		
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('ordering');

		$tmp = $q->get()->result();
		
		$ret['total_rows'] = $tmp[0]->count;
		
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('ordering')
    		->like('name', $term)
    		->or_like('order', $term)
   			->or_like('date', $term);
   			//->or_like('price', $term);


		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;

    	return $ret;

}


}
