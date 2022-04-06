<?php

class Service extends CIF_Controller
{

    public $layout = 'full';
    public $module = 'service';
    public $model = 'Services_model';

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index($id = null)
    {
        $data = array();
         if ($id) {
            $this->{$this->model}->{$this->_primary_key} = $id;
            $data['item'] = $this->{$this->model}->get();
            $this->load->view($this->module, $data); 
            if (!$data['item'])
                show_404();
         }
    
    }
}
