<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inquiry extends CI_Controller {
    function __construct() {
        parent::__construct();
        /* Check Session */
        if ($this->session->userdata('khtAdminLogin') == false) {
            redirect('', 'refresh');
            return;
        }
        
        /* Data model */
        $this->load->model('Inquiry_model', '', TRUE);
        $this->load->model('Subscriber_model', '', TRUE);
        
        /* Data for language */
        $lang = 'en';
        if($this->session->userdata('khtLanguage')) {
            $lang = $this->session->userdata('khtLanguage');
        }

        switch ($lang) {
            case 'en': $language = 'english'; break;
            case 'id': $language = 'indonesia'; break;
            default: $language = 'english';
        }

        $this->lang->load($language, $language);
        
        /* Data for left nav */
        $newSubscriberTotal = $this->Subscriber_model->getCount(array('Join_date >='=>'CURDATE() - INTERVAL 1 DAY'));        
        $data['newSubscriberTotal'] = $newSubscriberTotal;
        $unfollowInquiries = $this->Inquiry_model->getCount(array('Follow_up'=>'0'));        
        $data['unfollowInquiries'] = $unfollowInquiries;
        
        $this->load->vars($data);
    }

    public function index() {
        $data['message_sys'] = "";
        $this->home($data);
    }
    
    public function home($data) {
        $data['content_view'] = "backend/inquiry.php";
        $data['page_title'] = "Inquiries - Kehati Admin";
        $data['inquiries'] = $this->Inquiry_model->getList();
        $data['page_header'] = "Inquiry";
        $data['page_desc'] = "modul master for maintenance inquiries data.";
        
        $this->load->view($this->config->item('backend_themes'), $data);
    }
    
    public function delete() {
        $data['message_sys'] = $this->lang->line('MESSAGE_DELETE_FAILED');
        $data['class'] = 'danger';
        if ($this->input->post('deleted_id') != '') {
            $id = $this->input->post('deleted_id');
            $this->Inquiry_model->deleteInquiry($id);
            $data['message_sys'] = $this->lang->line('MESSAGE_DELETE_SUCCESS');
            $data['class'] = 'success';
        }

        $this->home($data);
    }
        
}
