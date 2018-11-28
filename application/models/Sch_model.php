<?php
class Sch_model extends CI_Model{

public function fetch_data(){
    $this->db->select('*');
    $query = $this->db->get('scholarships');
    return $query->result();
  }
}
 ?>
