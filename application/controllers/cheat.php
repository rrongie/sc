<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cheat extends CI_Controller {

	 function __construct(){
    parent::__construct();
    	$this->load->library('datatables');
    	$this->load->model('cheat_model');
	}
public function index(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('cheat_view');
	$this->load->view('template/footer');
	}

public function login_form(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('form/login_form_view');
	$this->load->view('template/footer');
}

public function check_login_fom(){
	$username = $this->input->post('username');
	$password = $this->input->post('password');

	$this->form_validation->set_rules('username','username','required');
	$this->form_validation->set_rules('password','password','required');

	  if ($this->form_validation->run() == FALSE){
    	 
	  	$this->load->view('ajax/ajax_view_login');
     
 	} else {
   		
   		echo"HELLO! welcome back, "; echo $username;
   			
   		$this->load->view('ajax/ajax_view_login');
   	}
}


public function view_login(){
	$this->load->view('ajax/ajax_view_login');
}


public function form_validation(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('form/form_validation_view');
	$this->load->view('template/footer');
}

public function check_form_validation(){
	$user_name = $this->input->post('user_name');
	$email= $this->input->post('email');
	$password = $this->input->post('password');
	$c_password = $this->input->post('c_password');

	
	$this->form_validation->set_rules('user_name','username','required');
	$this->form_validation->set_rules('email','username','required');
	$this->form_validation->set_rules('password','username','required');
	$this->form_validation->set_rules('c_password','username','required');

    if ($this->form_validation->run() == FALSE){
    	 
  	$this->session->set_flashdata('fail', 'username already exist!');
    redirect('cheat/form_validation');
     
 	} else {
   	
     $this->session->set_flashdata('success', 'Successfully Registered!');
     redirect('cheat/form_validation');

    }

}

public function form_validation_2(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('form/form_validation_2_view');
	$this->load->view('template/footer');
}


public function check_form_validation_2(){
		
	$user_name= $this->input->post('user_name');
	$email_address = $this->input->post('email_address');
	$password = $this->input->post('password');
	$con_password = $this->input->post('con_password');

	
		
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean|is_unique[user.username]');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE){
			echo validation_errors();		
		}else{
			var_dump($user_name,$email_address,$password,$con_password);
		}
	}

public function check_username(){

		$usr=$this->input->post('name');
        $result=$this->cheat_model->check_user_exist($usr);
        if($result){
			echo "false";
			
        }else{
			echo "true";
        }


}
public function data_tables(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('datatables/data_tables_view');
	$this->load->view('template/footer');
}

public function get_data_tables(){
	 $this
    ->datatables->select('id,username,email,type',FALSE)
    ->from('user');
    //->join('supplier', 'supplier_id = supplier.id','left')
      //->join('department', 'department_id = department.id')
    //->where('item_type','Consumable');

    $datatables = $this->datatables->generate('JSON');
    echo $datatables;

}


public function get_user_info_data_tables(){
	$id=$this->input->post('id');
	$account['user'] = $this->cheat_model->get_account($id);
	$account['position'] =$this->cheat_model->get_position();
	
	$this->parser->parse('ajax/edit_user_view',$account);

}

public function remove_user($id){

echo"delete code by ID here :)";var_dump($id);
	
}

public function add_user_data_tables(){
$account['position'] = $this->cheat_model->get_position();
//var_dump($account);
$this->parser->parse('ajax/add_user_data_tables_view',$account);

}

public function ajax_add_user_data_tables(){
	$username = $this->input->post('username');
	$email= $this->input->post('email');
 	$type = $this->input->post('type');

	$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
	$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
	//$this->form_validation->set_rules('type','type','trim|required|xss_clean');

	 if($this->form_validation->run()){
	 	echo"success";
	 }else {
       var_dump($username,$email,$type);
       $account['position'] = $this->cheat_model->get_position();

	 $this->parser->parse('ajax/add_user_data_tables_view',$account);
	 }
}

}

