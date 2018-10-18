<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('khtAdminLogin') == false) {
            redirect('', 'refresh');
            return;
        }

//        $this->load->model('admin_model', '', TRUE);
    }

    public function index() {
        $data['message_sys'] = "";
        $data['content_view'] = "backend/dashboard.php";
        $data['page_title'] = "Dashboard - Kehati Admin";

        $this->load->view($this->config->item('backend_themes'), $data);
    }

}
