<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

 function __construct(){
    parent::__construct();
    
    	$this->load->model('upload_model');
	}


public function index(){


$this->load->view('template/header');
$this->load->view('template/navigation');
$this->load->view('upload/upload_view');
$this->load->view('template/footer');

	
	}

public function upload_image(){

		
		$image = $_FILES['userfile'];
 		$config['file_name'] = 'asdas';
		$config['upload_path'] = './assets/images/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '500';


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());	
			var_dump($error);
			die();	
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
				 $data = array(
			
							'image' => $data['upload_data']['file_name'],
			
			
						);
      	
      			$this->upload_model->add_image($data);
      			$this->session->set_flashdata('success', 'Successfully upload!');
      			redirect('upload/index');
		}
	}


public function get_images(){

$pic['img'] = $this->upload_model->get_all_images();

$this->parser->parse('upload/list_images_view',$pic);

}


public function remove_image($id){

	var_dump($id);

}


}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */