<?php

class Subscriber_model extends CI_Model {

    private $table_name = 'kht_subscriber';
    
    function getList($start=0, $limit=0, $email='') {
        $this->db->select('Id, Email, Join_date');
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
    
    function getCount($where=array()){
        $this->db->from($this->table_name);
        
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        
        $count = $this->db->count_all_results();
        
        return $count;
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

    function deleteSubscriber($id) {
        $this->db->where('Id', $id);
        $this->db->delete($this->table_name);
        
        $res = $this->db->affected_rows();        
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