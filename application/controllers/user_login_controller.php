<?php defined('BASEPATH') OR ('No direct script access allowed');

class user_login_controller extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('user_login_model');
    }
    public function check_user_login(){
        $email=$this->input->post('email',true);
        $password=$this->input->post('password',true);
        $result=$this->user_login_model->check_user_login_info($email,$password); 
        if($result)
        {
            $sdata=array();
            $sdata['user_id']=$result->user_id;
            $sdata['first_name']=$result->first_name;
            $sdata['middle_name']=$result->middle_name;
            $sdata['last_name']=$result->last_name;
            $this->session->set_userdata($sdata);
            redirect("admin_controller",'refresh');

        }
        else{

            $sdata['messages']='Please enter valid User ID/Password';
            $this->session->set_userdata($sdata);
            redirect("welcome/user_login");
        }
        
    }
    public function logout(){
        $this->session->unset_userdata('user_id');
        redirect("welcome/index",'refresh');
    }
 
}