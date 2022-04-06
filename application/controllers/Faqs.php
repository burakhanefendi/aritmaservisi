<?php

class Faqs extends CIF_Controller {

    public $layout = 'full';
    public $module = 'faqs';
    public $model = 'Faqs_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module, $data);
    }
    

}
