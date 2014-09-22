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

public function convert_input_to_word(){


header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
header("Content-disposition: attachment; filename=\"name_here.doc\"");


	$name=$this->input->post('name');
	$order=$this->input->post('order');
	$price=$this->input->post('price');
	$qty=$this->input->post('qty');

	echo'

<table>
  <tr>
    <th>Name</th>
    <th>Order</th>
    <th>Qty</th>
    <th>Price</th>
     
  </tr>
  <tr>
    <td> '.$name.'</td>
    <td> '.$order.'</td>
    <td> '.$qty.'</td>
    <td> '.$price.'</td>
   
  </tr>
</table>



';

exit;
}


public function convert_to_excel(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('microsoft/convert_to_excel_view');
	$this->load->view('template/footer');


}
public function get_all_ordering_to_excel(){
   
   $this->load->helper('php-excel');
   $query = $this->microsoft_model->get_to_excel();

   $fields = (
   $field_array[] = array ("Date","Name", "Order", "Qty","Price")
                   );
   foreach ($query as $row)
         {
          $data_array[] = array( $row->date, $row->name, $row->order, $row->qty,$row->price );
         }

   $xls = new Excel_XML;
   $xls->addArray ($field_array);
   $xls->addArray ($data_array);
   $xls->generateXML ( "output_name" );


}
public function convert_input_to_excel(){
	$this->load->helper('php-excel');
	$name=$this->input->post('name');
	$order=$this->input->post('order');
	$price=$this->input->post('price');
	$qty=$this->input->post('qty');


	$field_array[] = array ("Name", "Order", "Qty","Price");
	$data_array[] = array( "Name" => $name, 
					   "order" => $order,
					   "qty" => $qty,
					   "price" => $price,
					   
					   );
     
   $xls = new Excel_XML;
   $xls->addArray ($field_array);
   $xls->addArray ($data_array);
   $xls->generateXML ( "output_name" );
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */