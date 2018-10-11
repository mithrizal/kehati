<?php

class Security extends CI_controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('security_model','',TRUE);
    }

    function index() {
        redirect('', 'refresh');        
    }

    function bismillah() {
        $username = $password = "";
        if (isset($_POST['kht-username'])) {
            $username = $_POST['kht-username'];
        }
        if (isset($_POST['kht-password'])) {
            $password = $_POST['kht-password'];
        }
        $login = $this->security_model->validate_admin($username, md5($password));
//        $this->mith_func->debugVar($username);
        switch ($login) {
            // login sukses
            case 1:
                if (isset($_POST['remember_me']) == 1) {
                    setcookie("cookKhtUname", $username, time() + 60 * 60 * 24 * 100, "/");
                    setcookie("cookKhtPass", $password, time() + 60 * 60 * 24 * 100, "/");
                }
                redirect($this->config->item('default_admin_controller'));
                break;
            //gagal login salah password
            case 2:
            //gagal login salah username
            case 3:
            default :
                $data['message_sys'] = "We don't recognize username you entered.";
                $data['page_title'] = "Sign In kehati-shoes.com";

                $this->load->view('frontend/bismillah.php',$data);
        }
    }

    function logout() {
        $this->session->sess_destroy();

        redirect('', 'refresh');
    }

}
