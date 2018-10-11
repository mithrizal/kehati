<?php

class Security_model extends CI_Model {

    private $table_name = 'kht_admin';
    
    function validate_admin($username, $password) {
        $this->db->where('admin_username', $username);        
        $query = $this->db->get($this->table_name);
        $row = $query->row();
        
        // check username
        if($query->num_rows() > 0) {
            $this->db->where('admin_username', $username);        
            $this->db->where('admin_password', $password);            
            $query = $this->db->get($this->table_name);
            $row = $query->row();
//            $str = $this->db->last_query();
//            $this->mith_func->debugVar($last_id);
            if($query->num_rows() > 0) {
                $data['khtAdminUsername'] = $row->admin_email;
                $data['khtAdminId'] = $row->admin_id;
                $data['khtAdminLogin']= TRUE;

                $this->session->set_userdata($data);
                return 1;   //sukses login.
            }else {
                return 2;   //gagal login password salah.
            }
        }else {
            return 3;   //gagal login user tidak ditemukan.
        }

    }
}