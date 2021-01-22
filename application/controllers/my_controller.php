<?php defined('BASEPATH') OR ('No direct script access allowed');


class my_controller extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('my_controller_model');
    }
    public function user_registration()
	{
		$this->load->view('user_registration');
	}


    public function user_registration_information()
	{
		$data =array();
        $data['first_name']=$this->input->post('first_name');
        $data['middle_name']=$this->input->post('middle_name');
        $data['last_name']=$this->input->post('last_name');
        $data['address']=$this->input->post('address');
        $data['email']=$this->input->post('email');
        $data['password']=$this->input->post('password');
		$this->my_controller_model->Insertdata_user_information($data);
		$sdata=array();
		$sdata['save_messages']='Registration Completed Succesfully.';
		$this->session->set_userdata($sdata);
		redirect("Welcome/user_registration");
	}

}
