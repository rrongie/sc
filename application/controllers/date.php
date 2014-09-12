<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Date extends CI_Controller {

	
function __construct(){
	parent::__construct();
	$this->load->model('date_model');
		
	}


public function index(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('date/date_view');
	$this->load->view('template/footer');
	}


public function search_date(){

	$from = $this->input->post('from');
	$to = $this->input->post('to');

	$this->form_validation->set_rules('from', 'from', 'trim|required|xss_clean|callback_check_date['.$from.'++'.$to.']');

	if($this->form_validation->run() ){

	$list = $this->date_model->get_date($from,$to);
	
	echo '<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Order</th>
				<th>Date</th>
			
			</tr>
		</thead>
		<tbody>';
		foreach ($list as $row) {
				echo '<tr>
			
				<td>'.$row->name.'</td>
				<td>'.$row->order.'</td>
				<td>'.date('m/d/Y h:i A', strtotime($row->date)).'</td>

				</tr>';
				
			}

			if($list == NULL){
			echo"No results(s);";
			}

		echo '</tbody>';

	}else{
		echo'check your DATE  >from: must not less than to:<';
	}

}

public function check_date($default,$dates){

	 $date = explode('++', $dates);

	 if ( $date[0] < $date[1] ) {
	   return True;
	  }else{
	  	return False;
	  }

	
}

public function date_format(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('date/date_format_view');
	$this->load->view('template/footer');
	}

public function get_date_formats(){
	$formats = $this->date_model->get_dates();

	foreach ($formats as $row) {
	 
	 echo'<div class="well">';	

	 echo'<b>Date:</b>' .date('m/d/Y', strtotime($row->date)).'';  echo'<b>Time:</b>'  .date('h:i A', strtotime($row->date)). '<br>';
	 echo'<b>Date:</b>' .date('F d, Y', strtotime($row->date)).'';  echo'<b>Time:</b>'  .date('h:i a', strtotime($row->date)). '<br>';
	 echo'<b>Date:</b>' .date('l jS \o\f F Y ', strtotime($row->date)).''; echo'<b>Time:</b>'  .date('h:i A', strtotime($row->date)). '<br>';
	 echo'<b>Date:</b>' .date('jS \o\f F, Y', strtotime($row->date)).''; echo'<b>Time:</b>'  .date('h:i a', strtotime($row->date)). '<br>';
	 echo'<b>Date:</b>' .date('D j/n/Y', strtotime($row->date)).''; echo'<b>Time:</b>'  .date('h:i a', strtotime($row->date)). '<br>';
	 
	 echo'</div>';
	}

}



}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */