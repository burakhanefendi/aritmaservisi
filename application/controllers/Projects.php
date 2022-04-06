<?php

class Projects extends CIF_Controller {

    public $layout = 'full';
    public $module = 'projects';
    public $model = 'Projects_model';

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {

        $this->{$this->model}->custom_select = 'projects.*, services.title as service';
        $this->{$this->model}->joins = array(
            'services' => array('services.service_id = projects.service_id', 'inner')
        );
        $data['services'] = $this->db->select('services.*')->order_by('title', 'ASC')->get('services')->result();

        $data['items'] = $this->{$this->model}->get();
        
        $this->load->view($this->module, $data);
    }

}
