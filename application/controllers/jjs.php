<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jjs extends CI_Controller {


public function index(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('jjs/jquery_js_guide_view');
	$this->load->view('template/footer');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */