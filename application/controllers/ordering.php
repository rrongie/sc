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


		if($this->form_validation->run()){
			

			$data = array(

				'name'=> 	$name = $this->input->post('name'),
				'order'=> 	$name = $this->input->post('order'),

				);
			$this->ordering_model->insert_oder($data);
			echo"done";
		}else{
			echo"something w";
				
		}
}

public function get_orders(){
	
	$data['list'] = $this->ordering_model->get_orders();
	$this->parser->parse('ordering/ordering_list',$data);
}


public function delete_order($id){

$this->ordering_model->delete_order_mo($id);

}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
