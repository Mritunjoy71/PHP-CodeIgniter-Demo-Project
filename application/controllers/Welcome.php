<?php defined('BASEPATH') OR ('No direct script access allowed');


class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function aboutus()
	{
		$this->load->view('about_us');
	}
	
	public function user_registration()
	{
		$this->load->view('user_registration');
	}
	public function user_login()
	{
		$this->load->view('user_login');
    }
	
}
