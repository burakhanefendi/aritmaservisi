<?php

class Projects extends CIF_Controller
{
    public $layout = 'full';
    public $module = 'projects';
    public $model = 'Projects_model';

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index()
    {

        $this->{$this->model}->custom_select = 'projects.*, services.title as service';
        $this->{$this->model}->joins = array(
            'services' => array('services.service_id = projects.service_id', 'inner')

        );

      
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = null)
    {
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
        $this->form_validation->set_rules('title', 'العنوان', 'trim|required');
        $this->form_validation->set_rules('service_id', 'الخدمة', 'trim|required');
        $this->form_validation->set_rules("link", 'الرابط', "trim");
        $this->form_validation->set_rules("image", 'الصورة', "trim|callback_image[$id]");

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->title = $this->input->post('title');
            $this->{$this->model}->service_id = $this->input->post('service_id');
            $this->{$this->model}->link = $this->input->post('link');

            $this->{$this->model}->save();
            redirect('admin/' . $this->module);
        }
    }

    public function delete($id = null)
    {
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        $data['item'] = $this->{$this->model}->get();
        if (!$data['item'])
            show_404();
        $this->{$this->model}->delete();
        redirect('admin/' . $this->module);
    }

     public function image($var, $id) {
        $config['upload_path'] = './cdn/projects/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->{$this->model}->image = base_url() . '/cdn/projects/' . $data['file_name'];
        }
        return true;
    }


}
