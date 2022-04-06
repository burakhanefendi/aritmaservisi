<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CIF_Controller {

    public $layout = 'full';
    public $module = 'users';
    public $model = 'users_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index() {
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = NULL) {
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
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules("email", 'Email', "trim|required|valid_email");
        if ($id)
            $this->form_validation->set_rules('password', 'Password', 'trim');
        else
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules("image", 'Image', "trim|callback_file[$id]");

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->users_model->username = $this->input->post('username');
            $this->users_model->email = $this->input->post('email');
            if (strlen($this->input->post('password')) > 0)
                $this->{$this->model}->password = md5($this->input->post('password'));
          
            $this->{$this->model}->save();
            redirect('admin/' . $this->module);
        }
    }

    public function delete($id = null) {
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        $data['item'] = $this->{$this->model}->get();
        if (!$data['item'])
            show_404();
        $this->{$this->model}->delete();
        redirect('admin/' . $this->module);
    }

    public function file($var, $id) {
        $file = 'image';
        $config['upload_path'] = './cdn/users';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file) && !$id) {
            $this->form_validation->set_message('file', str_replace(array('<p>', '</p>'), '', $this->upload->display_errors()));
            return FALSE;
        } else {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->{$this->model}->{$file} = $data['file_name'];
        }
    }

}

/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */