<?php

class Subscriber_model extends CI_Model {

    private $table_name = 'kht_subscriber';
//    private $table_join = 'volt_country';    
    
    function getList($start=0, $limit=0, $email='') {
        $this->db->select('Email, Join_date');
        $this->db->from($this->table_name);
        $this->db->order_by("Join_date", "asc"); 
        
        if($limit > 0){
            $this->db->limit($limit, $start);
        }
        
        if($email <> ''){
            $this->db->like('Email', $email, 'both');
        }
        
        $query = $this->db->get();
        
        return $query->result();
    }

    function getSubscriber($email) {
        $query = $this->db->get_where($this->table_name, array('Email'=> strtolower($email)));
        
        return $query->row();
    }

    function insertSubscriber($data) {
        $this->db->insert($this->table_name, $data);
        $last_id = $this->db->insert_id();
        
        return $last_id;
    }

    function updateSubscriber($data) {
        $this->db->where('Email', $data['Email']);
        $this->db->update($this->table_name, $data);        
    }

    function deleteSubscriber($email) {
        $this->db->where('Email', $email);
        $this->db->delete($this->table_name);
        
        $res = $this->db->_error_number();        
        return $res;
    }
        
    function isDuplicate($data) {
        foreach ($data as $key => $value) {
            $this->db->where($key, $value);
        }        
        $this->db->from($this->table_name);        
        $res = $this->db->count_all_results();

        if($res > 0)  return TRUE;
        else    return FALSE;
    }
    
}