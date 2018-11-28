<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship extends CI_Controller {
public function sch_mod()
{
  $this->load->model("Sch_model");
  $data["records"]=$this->Sch_model-> fetch_data();
  $this->load->view("scholarships",$data);

}


}?>
