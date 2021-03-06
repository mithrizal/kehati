<?php

class Inquiry_model extends CI_Model {

    private $table_name = 'kht_inquiry';
    
    function getList($start=0, $limit=0, $where=array()) {
        $this->db->select('*');
        $this->db->from($this->table_name);
        
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        
        $this->db->order_by("Follow_up", "asc"); 
        $this->db->order_by("Inquiry_date", "asc"); 
        
        if($limit > 0){
            $this->db->limit($limit, $start);
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
    
    function getInquiry($id) {
        $query = $this->db->get_where($this->table_name, array('Id'=> $id));
        
        return $query->row();
    }

    function insertInquiry($data) {
        $this->db->insert($this->table_name, $data);
        $last_id = $this->db->insert_id();
        
        return $last_id;
    }

    function updateInquiry($data) {
        $this->db->where('Id', $data['id']);
        $this->db->update($this->table_name, $data);        
    }

    function deleteInquiry($id) {
        $this->db->where('Id', $id);
        $this->db->delete($this->table_name);
        
        $res = $this->db->_error_number();        
        return $res;
    }
        
}