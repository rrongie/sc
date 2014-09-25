<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Controller {



public function retrieve_products(){
		$this->db->select('*')->from('item')->join('stock_item', 'item_id = item.id');
		$sql = $this->db->get();
		return $sql->result_array();
	}
public function get($id){
		$this->db->where('id', $id);
		$sql = $this->db->get('item');
		
		return $sql->result_array();
}
public function check_product_qty($contents){
		
		$data = array();
		foreach ($contents as $key1 => $inner) {
				foreach ($inner as $key => $value) {

					if ($key1 == $value) {

						//var_dump($inner);

							$this->db->where('item_id', $inner['id']);
							$sql = $this->db->get('stock_item');
							$sql = $sql->result_array();

							$product_qty = $sql[0]['stocks'];

							if ($inner['qty'] > $product_qty ) {
								
								 $inner = array_merge($inner, array('availability' => 'out of stock'));
								 $data[] = $inner;
								
								//$data[] = array('rowid' => $inner['rowid'], 'availability' => TRUE);


							}else{
								 $inner = array_merge($inner, array('availability' => 'available'));
								 $data[] = $inner;

								//$data[] = array('rowid' => $inner['rowid'], 'availability' => FALSE);
							}
						
					}
					
				}
		}
		return $data;
	}	

public function check_checkout($contents){
		
		$data = array();
		foreach ($contents as $key1 => $inner) {
				foreach ($inner as $key => $value) {

					if ($key1 == $value) {

						//var_dump($inner);

							$this->db->where('item_id', $inner['id']);
							$sql = $this->db->get('stock_item');
							$sql = $sql->result_array();

							$product_qty = $sql[0]['stocks'];

							if ($inner['qty'] > $product_qty ) {
								
								 return false;

							}else{
								 $data = true;
							}
						
					}
					
				}
		}
		return $data;
	}

public function minus_stock($contents){


	$data =array();
	foreach ($contents as $key => $value) {
				 	$id = $value['id'];
				 	$qty = $value['qty'];
				 	$this->db->query("UPDATE stock_item SET stocks = stocks - $qty WHERE id = '$id' ");
				
				 }
	return $data;			 
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */