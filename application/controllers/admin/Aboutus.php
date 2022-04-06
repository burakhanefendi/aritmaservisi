<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus extends CIF_Controller {

    public $layout = 'full';
    public $module = 'aboutus';
    public $model = 'Aboutus_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function manage($id = FALSE) {
        $data = array();

        if ($id) {
            $this->{$this->model}->{$this->_primary_key} = $id;
            $data['item'] = $this->{$this->model}->get();
            if (!$data['item'])
                show_404();
        } else {
            $data['item'] = new Std();
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('about', 'Who we are', 'trim|required');
//        $this->form_validation->set_rules('benfits', 'Why choose us', 'trim|required');
//        $this->form_validation->set_rules('video', 'Video Link', 'trim|required');
       

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->about = $this->input->post('about', FALSE);
//            $this->{$this->model}->benfits = $this->input->post('benfits');
//            $this->{$this->model}->video = $this->input->post('video');
            $this->{$this->model}->save();
            redirect('admin/aboutus/manage/1');
        }
    }

   

}
