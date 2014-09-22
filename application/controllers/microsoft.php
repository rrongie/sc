<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Microsoft extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('microsoft_model');
		
	}


	public function convert_to_word(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('microsoft/convert_to_word_view');
	$this->load->view('template/footer');
	}


	public function get_all_ordering_to_word(){
	

	header("Content-Type: application/vnd.ms-word");
	header("Expires: 0");
	header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
	header("Content-disposition: attachment; filename=\"Xbiz.doc\"");
		$word = $this->microsoft_model->get_to_word();
		//var_dump($data);

	
	 echo '<table class="table">
		<thead>
			<tr>
				<th>Date / Time</th>
				<th>Name</th>
				<th>Order</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>';



			foreach ($word as $row) {
				echo '<tr><td>'.date('m/d/Y h:i A', strtotime($row->date)).'</td>
				<td>'.$row->name.'</td>
				<td>'.$row->order.'</td>
				<td>'.$row->qty.'</td>
				<td>'.$row->price.'</td>
				<td>'.$row->total.'</td>				


				</tr>';
			}

		echo '</tbody>

	</table>';

	exit;

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */