<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test()
	{
		$this->load->view('class1');
	}
	public function form()
	{
		$this->load->view('form');
	}
	public function home()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$this->load->view('about');
	}
}
