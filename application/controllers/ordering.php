<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ordering extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('ordering_model');
		
	}


	public function index()
	{
	

	
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	
	$this->load->view('ordering/ordering_view');
	$this->load->view('template/footer');
	}


	public function insert_order(){
		
	
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('order','order','required');
		
		if ($this->form_validation->run() == FALSE){
				
				echo"something wrong we are aware of this :3";
				

			
		}else{
			$data = array(

				'name'=> 	$name = $this->input->post('name'),
				'order'=> 	$name = $this->input->post('order'),
				'qty'=> 	$name = $this->input->post('qty'),
				'price'=> 	$name = $this->input->post('price'),

				);
			
			$this->ordering_model->insert_oder($data);
			$this->session->set_flashdata('success', 'Successfully Add!');
			//redirect('cheat');
		}
}

public function get_orders(){
	
	$data['list'] = $this->ordering_model->get_orders();
	
	$data['get_total'] = $this->ordering_model->get_tots();
	
	$this->parser->parse('ordering/ordering_list',$data);
}


public function delete_order($id){

$this->ordering_model->delete_order_mo($id);

}

public function edit_order(){

$id = $this->input->post('id');

$data['list'] = $this->ordering_model->get_edit($id);

$this->parser->parse('ajax/ajax_edit_orders',$data);

}

public function validate_edit_order($id){

$form_data = array(
	'name' => $this->input->post('name'),
	'order' => $this->input->post('order'),
	'qty' => $this->input->post('qty'),
	'price' => $this->input->post('price'),
	);

$this->form_validation->set_rules('name','name','|required');
$this->form_validation->set_rules('order','order','|required');
$this->form_validation->set_rules('qty','qty','|required');
$this->form_validation->set_rules('price','price','|required');

if($this->form_validation->run() == FALSE){
 echo validation_errors();
}else {

     $this->db->where('id',$id);
     $this->db->update('ordering',$form_data);
     $this->session->set_flashdata('success_edit','Successfully edit!');
     redirect('ordering/index');

//echo"update or edit 2line lng yan good luck :3";
}

}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
