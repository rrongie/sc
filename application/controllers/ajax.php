<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {


public function index(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('ajax_guide/ajax_guide_view');
	$this->load->view('template/footer');	

}
public function test(){
	echo"hello";
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */