<?php

class Store_model extends CI_Model {

    private $table_name = 'kht_store';

    function getStores($where=array(), $start=0, $limit=0) {
        $this->db->select('Id, Name, Description, Link, Value');        
        $this->db->from($this->table_name);
        
        $this->db->where('Status', '1');
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        
        $this->db->order_by("Value", "desc"); 
        $this->db->order_by("Join_date", "asc"); 
        $this->db->order_by("Name", "asc"); 
                
        if($limit > 0){
            $this->db->limit($limit, $start);
        }
        
        $query = $this->db->get();
        
        return $query->result();
    }
        
    function getStoreByID($store_id) {
        $query = $this->db->get_where($this->table_name, array('Id'=>$store_id));
        
        return $query->row();
    }

    function insertStore($data) {
        $this->load->library('uuid');
        
        $id = $this->uuid->v3();
        $this->db->set('Id', $id, FALSE);
        $this->db->insert($this->table_name, $data);
        $last_id = $this->db->insert_id();
        
//        $this->mith_func->debugVar($last_id);
        return $last_id;
    }

    function updateStore($data) {
        $this->db->where('Id', $data['store_id']);
        $this->db->update($this->table_name, $data);        
    }

    function deleteStore($store_id) {
        $this->db->where('Id', $store_id);
        $this->db->delete($this->table_name);
        
        $res = $this->db->_error_number();        
        return $res;
    }
      
    function getListStore() {
        $this->db->select('Id, Name');
        $this->db->from($this->table_name);
        
        $this->db->order_by("Value", "desc"); 
        $this->db->order_by("Join_date", "asc"); 
        $this->db->order_by("Name", "asc"); 
              
        $query = $this->db->get();        
        $n = $query->result();
        
        $nList = array();
        $nList[""] = "-- Choose Store --";
        foreach ($n as $value) {
            $nList[$value->Id] = $value->Name;
        }
        
        return $nList;     
    }

}