<?php

class new_model extends CI_Model{
    public function Insertdata($data)
    {
        $this->db->insert('tbl_info',$data);
    }

}