
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistics extends CI_Controller {

	

	public function bar_graph(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('statistics/bar_graph_view');
	$this->load->view('template/footer');
	}


	public function get_sale(){
		$this->db->select('date, total')->from('ordering');
		$sql = $this->db->get();
		$result = $sql->result_array();
		$result2 = $result;


		$i = 0;
		$day_total = array();
		$tableHeader = ['Month', 'Monthly Income'];
		$day_total[] = $tableHeader;
		foreach($result as $key => $value) {
			$odate = date('F-Y', strtotime($value['date']));
			$total = 0;
			foreach($result2 as $key2 => $value2) {
				$idate = date('F-Y', strtotime($value2['date']));
				if ($odate == $idate) {
					$total = $total + $value2['total']; 			
				}
			}

			if ($day_total[$i][0] == $odate && $day_total[$i][1] == $total) {
				continue;
			}else{
				$day_total[] = [$odate, $total];
			}


			$i++;


		}


		echo json_encode($day_total);
	}

public function get_sale_side_bar(){
	$this->db->select('date, total')->from('ordering');
		$sql = $this->db->get();
		$result = $sql->result_array();
		$result2 = $result;


		$i = 0;
		$day_total = array();
		$tableHeader = ['Month', 'Monthly Income'];
		$day_total[] = $tableHeader;
		foreach($result as $key => $value) {
			$odate = date('F-Y', strtotime($value['date']));
			$total = 0;
			foreach($result2 as $key2 => $value2) {
				$idate = date('F-Y', strtotime($value2['date']));
				if ($odate == $idate) {
					$total = $total + $value2['total']; 			
				}
			}

			if ($day_total[$i][0] == $odate && $day_total[$i][1] == $total) {
				continue;
			}else{
				$day_total[] = [$odate, $total];
			}


			$i++;


		}


		echo json_encode($day_total);
}


public function pie_graph(){
	$this->load->view('template/header');
	$this->load->view('template/navigation');
	$this->load->view('statistics/pie_graph_view');
	$this->load->view('template/footer');
}

public function get_pie_sale(){
		$sql = $this->db->query("SELECT name AS for_name ,total AS for_total FROM ordering ORDER BY date ASC");
		$result = $sql->result_array();

		$tableHeader = ['Name', 'Total'];
		$weekly[] = $tableHeader;

		foreach($result as $key => $value){
				
			$weekly[] = [$value['for_name'], (int)$value['for_total']];
		
		}

		echo json_encode($weekly);
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */