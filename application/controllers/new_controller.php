<?php defined('BASEPATH') OR ('No direct script access allowed');




class new_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('new_model');
    }
	
    public function index()
	{
		$this->load->view('home');
    }
    
    public function contact()
	{
		$this->load->view('contact');
	}
	public function save_new_info()
	{
		$data =array();
		$data['first_name']=$this->input->post('first_name');
		$data['last_name']=$this->input->post('last_name');
		$data['email']=$this->input->post('email');
		$this->new_model->Insertdata($data);
		redirect("new_controller/contact");

	}

}
