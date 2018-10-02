<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Subscriber_model', '', TRUE);
        $this->load->model('Inquiry_model', '', TRUE);

    }

    public $class_menu = array(
        'home' => '',
        'collections' => '',
        'brand' => '',
        'store' => '',
        'contact' => ''
    );

    public function index() {
        $data['content_view'] = "frontend/home.php";
        $data['page_title'] = "Kehati Shoes Design - Home Page";
        $this->class_menu['home'] = 'active';
        $data['class_menu'] = $this->class_menu;
        $data['quote'] = "We believe that beautiful shoes will bring you beautiful steps that remain stay toward your heart.";
        $data['subscribe_view'] = TRUE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function collections() {
        $category_name = $this->uri->segment(3);
        $product_code = $this->uri->segment(4);

        /** URL untuk detail product. * */
        if ($product_code) {
            $this->detail_product($product_code);
            return;
        }

        $data['page_title'] = "Collections | Kehati Shoes";
        $this->class_menu['collections'] = 'active';
        $data['class_menu'] = $this->class_menu;
        $data['content_view'] = "frontend/collections.php";
        $data['quote'] = "Spring / Summer 2019";
        $data['end_quote'] = "We have high quality services that you will surely love!";
        $data['subscribe_view'] = FALSE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function detail_product($product) {
        $category_name = $this->uri->segment(3);
        $product_code = $this->uri->segment(4);

        $data['content_view'] = "frontend/details.php";
        $data['page_title'] = $product_code . " | Kehati Shoes";
        $this->class_menu['collections'] = 'active';
        $data['class_menu'] = $this->class_menu;
        $data['end_quote'] = "We have high quality services that you will surely love!";
        $data['subscribe_view'] = FALSE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function brand() {
        $data['content_view'] = "frontend/brand.php";
        $data['page_title'] = "About Kehati Shoes | Kehati Shoes";
        $this->class_menu['brand'] = 'active';
        $data['class_menu'] = $this->class_menu;
        $data['quote'] = "We believe that beautiful shoes will bring you beautiful steps that remain stay toward your heart.";
        $data['sub_quote'] = "“Footwear requires not only a keen eye for proportion, colour, and decoration, but also the constant attention to comfort, fit, and performance.”";
        $data['end_quote'] = "We have high quality services that you will surely love!";
        $data['subscribe_view'] = FALSE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function store() {
        $data['content_view'] = "frontend/store.php";
        $data['page_title'] = "Stockists | Kehati Shoes";
        $this->class_menu['store'] = 'active';
        $data['class_menu'] = $this->class_menu;
        $data['quote'] = "SHOP KEHATI SHOES WORLDWIDE";
        $data['sub_quote'] = "Kehati shoe’s are designed and handcrafted in Bandung and carried by fashion market place.";
        $data['end_quote'] = "We have high quality services that you will surely love!";
        $data['subscribe_view'] = FALSE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function contact($data = array()) {
        $data['content_view'] = "frontend/contact.php";
        $data['page_title'] = "Contact | Kehati Shoes";
        $this->class_menu['contact'] = 'active';
        $data['class_menu'] = $this->class_menu;
        $data['subscribe_view'] = TRUE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function terms() {
        $data['content_view'] = "frontend/terms.php";
        $data['page_title'] = "Terms of Service | Kehati Shoes";
        $data['class_menu'] = $this->class_menu;
        $data['end_quote'] = "We have high quality services that you will surely love!";
        $data['subscribe_view'] = FALSE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function privacy_policy() {
        $data['content_view'] = "frontend/privacy_policy.php";
        $data['page_title'] = "Privacy Policy | Kehati Shoes";
        $data['class_menu'] = $this->class_menu;
        $data['end_quote'] = "We have high quality services that you will surely love!";
        $data['subscribe_view'] = FALSE;

        $this->load->view($this->config->item('frontend_themes'), $data);
    }

    public function submitsubscribe() {
        $data['message_sys'] = $this->lang->line('MESSAGE_SUBSCRIBE_FAILED');
        $data['class'] = 'danger';
//        $this->mith_func->debugVar($this->input->post('email'));

        if ($this->input->post('email')) {
            $email = strtolower($this->input->post('email'));

            if (($this->input->server('REQUEST_METHOD') == 'POST') && $this->validatesubscribe()) {
                $insert_data = array(
                    'Email' => $email
                );

                $this->Subscriber_model->insertSubscriber($insert_data);
//                $data['message_sys'] = $this->lang->line('MESSAGE_SUBSCRIBE_SUCCESS');
                $data['message_sys'] = 'Thank You for Subscribe us! You will receive a confirmation email shortly.';
                $data['class'] = 'success';
            } else {
                # error management
                $error_arr = array();
                /** Jika Duplikat dianggap sukses. * */
                if (isset($this->error['duplicate'])) {
                    $data['message_sys'] = 'Thank You for Subscribe. You are already register your email before.';
                    $data['class'] = 'success';
                }

                $data['error'] = $error_arr;
            }
        } else {
            $data['message_sys'] = "We don't recognize the email address you entered. Please re-enter your email.";
        }
//        $this->mith_func->debugVar($data);
        $this->contact($data);
    }

    protected function validatesubscribe() {
        $check_data = array(
            'Email' => $this->input->post('email')
        );

        if ($this->Subscriber_model->isDuplicate($check_data)) {
            $this->error['duplicate'] = 'Data already exist.';
        }

        if (!$this->error)
            return true;
        else
            return false;
    }

    public function submitinquiry() {
        $data['message_sys'] = $this->lang->line('MESSAGE_SUBSCRIBE_FAILED');
        $data['class'] = 'danger';

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $insert_data = array(
                'First_name' => $this->input->post('name'),
                'Email' => strtolower($this->input->post('email')),
                'Subject' => strtolower($this->input->post('subject')),
                'Message' => strtolower($this->input->post('message'))
            );

            $this->Inquiry_model->insertInquiry($insert_data);

            $data['message_sys'] = 'Thank You for Reaching Out! We will response your message shortly.';
            $data['class'] = 'success';
        } else {
            $data['message_sys'] = "We don't recognize the email address you entered. Please re-enter your email.";
        }

        $this->contact($data);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */