<?php

class Epanjiyan extends CI_Controller
{
	
	
	public function index()
	{
		$this->load->helper('cookie');


        
		
		$this->load->view('index');
	}
	public function pre_registraion()
	{
		$this->load->view('pre_registration');
	}
	public function karyalay_m_panjeeyan_prakriya()
	{
		$this->load->view('karyalay_m_panjeeyan_prakriya');
	}
	public function input_form()
	{
		$this->load->view('input_form');
	}
	public function vilekh_namuna()
	{
		$this->load->view('vilekh_namuna');
	}
	public function IGRMis()
	{
		$this->load->view('IGRMis');
	}
	public function corona_guideline()
	{
		$this->load->view('corona_guideline');
	}
	public function pratikriya()
	{
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$data=array(
				"full_name"=>$this->input->post('full_name'),
				"mobile"=>$this->input->post('mobile'),
				"email"=>$this->input->post('email'),
				"feedback"=>$this->input->post('feedback')

			);
			$this->db->insert("feedback",$data);
			$q=$this->db->insert_id();
			if ($q>0) {
				return redirect("../pratikriya?succeed");
			}
			else{
				return redirect("../pratikriya?not_succeed");
			}
		}
		$this->load->view('pratikriya');
	}
	public function shikayat()
	{
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$data=array(
				"full_name"=>$this->input->post('full_name'),
				"mobile"=>$this->input->post('mobile'),
				"email"=>$this->input->post('email'),
				"epanjeeyan_id"=>$this->input->post('epanjeeyan_id'),
				"office_name"=>$this->input->post('office_name'),
				"problem_details"=>$this->input->post('problem_details')
			);
			$this->db->insert("complain",$data);
			$q=$this->db->insert_id();
			if ($q>0) {
				return redirect("../shikayat?succeed");
			}
			else{
				return redirect("../shikayat?not_succeed");
			}
		}
		$this->load->view('shikayat');
	}


	public function data() {

		$this->load->view('test');
		
	}
}

?>