<?php

class Data_func {

    function __construct() {
        $this->CI =& get_instance();
    }
    
    function getAdminLogin(){
        if($this->CI->session->userdata('vAdminLogin')){
            $uid = $this->CI->session->userdata('vAdminId');
            $query = $this->CI->db->get_where('volt_admin',array('admin_id'=>$uid));
        
            return $query->row();
        }else{
            return FALSE;
        }
    }
    
    function getMemberLogin(){
        if($this->CI->session->userdata('vMemberLogin')){
            $uid = $this->CI->session->userdata('vMemberId');
            $query = $this->CI->db->get_where('volt_member', array('member_id'=>$uid));
        
            return $query->row();
        }else{
            return FALSE;
        }
    }
        
    function pass_gen($len) {
        $characters = array("A","B","C","D","E","F","G","H","I","J","K","L","M",
                            "N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
                            "a","b","c","d","e","f","g","h","i","j","k","l","m",
                            "n","o","p","q","r","s","t","u","v","w","x","y","z",
                            "0","1","2","3","4","5","6","7","8","9");
        $pass = '';
        for ($i = 0; $i < $len; $i++) {
            $x = mt_rand(0, count($characters)-1);
            $pass .= $characters[$x];
        }
        return $pass;
    }
    
        
/** End Added by RR **/


}