<?php defined('BASEPATH') OR ('No direct script access allowed');

class Admin_controller extends CI_Controller {
    public function index(){
        $this->load->view('admin_panel/home_admin');
    }
    public function setting_aboutus(){
        $this->load->view('admin_panel/setting_aboutus');
    }

}