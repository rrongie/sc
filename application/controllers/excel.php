<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('ordering_model');
		
	}


function index()
{
   $this->load->helper('php-excel');
   $query = $this->db->get('ordering');
   $fields = (
   $field_array[] = array ("Order", "Name", "Date")
                   );
   foreach ($query->result() as $row)
         {
         $data_array[] = array( $row->order, $row->name, $row->date );
         }
   $xls = new Excel_XML;
   $xls->addArray ($field_array);
   $xls->addArray ($data_array);
   $xls->generateXML ( "output_name" );
}

public function input_to_excel(){
   $this->load->view('excel/input_to_excel_view');
}

public function convert_to_excel(){
 $this->load->helper('php-excel');

$label = $this->input->post('label');
$qty = $this->input->post('qty');
$date = $this->input->post('date');

$data = array(
      'label' => $this->input->post('label') ,
      'qty' => $this->input->post('qty') ,
      'date' => $this->input->post('date') ,
         );

$field_array[] = array ("Order", "Name", "Date");
$data_array[] = array( "label" => $label,"qty" => $qty, "date" => $date);
     

   $xls = new Excel_XML;
   $xls->addArray ($field_array);
   $xls->addArray ($data_array);
   $xls->generateXML ( "test_name" );
}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */