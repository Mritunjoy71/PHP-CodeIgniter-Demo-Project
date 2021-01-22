<?php defined('BASEPATH') OR ('No direct script access allowed');

class my_controller_model extends CI_Model{
    public function Insertdata_user_information($data)
    {
        $this->db->insert('tbl_user',$data);
    }

}