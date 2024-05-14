<?php

class MedicalController extends CI_Controller {

	public function index()
	{
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$data=array(
				"name"=>$this->input->post('pat_name'),
				"email"=>$this->input->post('pat_email'),
				"subject"=>$this->input->post('sub'),
				"message"=>$this->input->post('msg')
			);
			//print_r($data);
			$lid=$this->UserModel->appointment_entry($data);
			if ($lid>0) {
				echo "<script>alert('inserted');</script>";
			}
		}

	$this->load->view('medical/index');
	}
}

?>