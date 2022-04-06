<?php

class Home extends CIF_Controller {

    public $layout = 'full';
    public $module = 'home';
    public $model = 'Projects_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {
        $data['sliders'] = $this->db->get('sliders')->result();
        $data['categories'] = $this->db->get('categories')->result();
        $data['testimonials'] = $this->db->get('testimonials')->result();
        $data['partners'] = $this->db->limit(6)->get('partners')->result();
        $this->{$this->model}->order_by['project_id'] = 'DESC';
        $this->{$this->model}->limit = 6;
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module, $data);
    }

    public function contactus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        $data['success'] = false;

        if ($this->form_validation->run() == TRUE) {
            @mail(config('webmaster_email'), 'Message from MaroCms', ""
                            . "Full Name: $_POST[name]\n"
                            . "Email: $_POST[email]\n"
                            . "Phone: $_POST[phone]\n"
                            . "Message: $_POST[message]\n"
                            . "");
            $data['success'] = true;
        }
        $this->load->view(__FUNCTION__, $data);
    }

    public function newsletters() {
        //        NEWSLETTERS
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[newsletters.email]');
        if ($this->form_validation->run() == TRUE) {
            $this->layout = 'ajax';
            $this->db->insert('newsletters', [
                'email' => $this->input->post('email')
            ]);
            $data['success'] = true;
            echo "<p><i class='fa fa-check-circle'></i> Your email has been added to our newsletter</p>";
            exit();
        }
        if ($_POST && validation_errors()) {
            $this->layout = 'ajax';
            echo "<p class='error-msg'><i class='fa fa-times-circle'></i> The Email field must contain a unique value.</p>";
            exit();
        }
    }

}
