<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('cart_model');
		
	}

public function index(){
	
	 $data['item'] = $this->cart_model->retrieve_products();

	 //var_dump($data);
	
  
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->parser->parse('cart/cart_view', $data);
	$this->load->view('template/footer');
	}

public function add_cart(){
	
	$id = $this->input->post('product_id');
	$qty = $this->input->post('quantity');
	$item = $this->cart_model->get($id);
	
	$item_info = array(
               'id'      => $id,
               'qty'     => $qty,
               'name'    => $item[0]['name'],
               'price'   => $item[0]['price'],
				);
	$this->cart->insert($item_info);
 	redirect('cart');
}


public function remove_cart($rowid){
	$data = array(
		    'rowid'   => $rowid,
		    'qty'     => 0
			);

		$this->cart->update($data); 

		redirect('cart');
}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */