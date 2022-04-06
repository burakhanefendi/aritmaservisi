<?php

class Aboutus extends CIF_Controller
{

    public $layout = 'full';
    public $module = 'aboutus';
      public $model = 'Aboutus_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
     
    }
    public function index()
    {
        $data['team'] = $this->db->get('team')->result();
        $data['partners'] = $this->db->limit(6)->get('partners')->result();
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module, $data);
    }

}
