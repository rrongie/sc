<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_model extends CI_Model {
    

public function add_image($data){
  $this->db->insert('upload', $data);
}

public function get_all_images(){
$sql=$this->db->get('upload');
return $sql->result_array();
}

}
