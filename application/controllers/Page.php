<?php

class Page extends CIF_Controller {

    public $layout = 'full';
    public $module = 'page';
    public $model = 'Pages_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index($id = null) {

        $data = array();
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        
        $data['item'] = $this->{$this->model}->get();
        if (!$data['item'])
            show_404();

        $this->load->view($this->module, $data);
    }

}
