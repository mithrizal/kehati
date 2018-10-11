<?php

class Product_model extends CI_Model {

    private $table_name = 'kht_product';
//    private $table_join = 'volt_category';
//    private $table_image = 'volt_image_product';

    function getProduct($where=array(), $start=0, $limit=0) {
        $this->db->select('Id, Code, Name, Description');        
        $this->db->from($this->table_name);
        
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        
        $this->db->order_by("Value", "desc"); 
        $this->db->order_by("Code", "asc"); 
                
        if($limit > 0){
            $this->db->limit($limit, $start);
        }
        
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getCollections($where=array(), $start=0, $limit=0) {
        $this->db->select('Id, Code, Name, Description, Category, Color, Detail_1, Detail_2, Detail_3, Detail_4');        
        $this->db->from($this->table_name);
        
        $this->db->where('Status', '1');
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        
        $this->db->order_by("Value", "desc"); 
        $this->db->order_by("Code", "asc"); 
                
        if($limit > 0){
            $this->db->limit($limit, $start);
        }
        
        $query = $this->db->get();
        
        return $query->result();
    }
        
    function getProductByID($product_id) {
        $query = $this->db->get_where($this->table_name, array('Id'=>$product_id));
        
        return $query->row();
    }

    function getProductByCode($product_code) {
        $query = $this->db->get_where($this->table_name, array('Code'=>$product_code));
                
        return $query->row();
    }

    function insertProduct($data) {
        $this->load->library('uuid');
        
        $id = $this->uuid->v3();
        $this->db->set('Id', $id, FALSE);
        $this->db->insert($this->table_name, $data);
        $last_id = $this->db->insert_id();
        
//        $this->mith_func->debugVar($last_id);
        return $last_id;
    }

    function updateProduct($data) {
        $this->db->where('Id', $data['product_id']);
        $this->db->update($this->table_name, $data);        
    }

    function deleteProduct($product_id) {
        $this->db->where('Id', $product_id);
        $this->db->delete($this->table_name);
        
        $res = $this->db->_error_number();        
        return $res;
    }
      
    function getListProduct() {
        $this->db->select('*');
        $this->db->from($this->table_name);
        
        $this->db->order_by("Value", "desc"); 
        $this->db->order_by("Code", "asc"); 
                
        $query = $this->db->get();        
        $n = $query->result();
        
        $nList = array();
        $nList[""] = "-- Choose Product --";
        foreach ($n as $value) {
            $nList[$value->Id] = $value->Code." - ".$value->Name;
        }
        
        return $nList;     
    }

}