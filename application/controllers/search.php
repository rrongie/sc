<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {


public function index(){
 	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('search/search_view');
	$this->load->view('template/footer');
	}

public function get_search(){
	$this->load->model('search_model');
	$term = $this->input->post('term');
	$query = $this->search_model->get_results($term);

	$data['query'] = $query['rows'];

	$this->parser->parse('search/search_result',$data);

}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */