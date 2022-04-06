<?php

class Services extends CIF_Controller {

    public $layout = 'full';
    public $module = 'services';
    public $model = 'Services_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

   public function index()
    {

        $this->{$this->model}->custom_select = 'services.*, categories.title as category';
        $this->{$this->model}->joins = array(
            'categories' => array('categories.category_id = services.category_id', 'inner')

        );

        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = null) {
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
        $this->form_validation->set_rules('category_id', 'category', 'trim|required');
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules("description", 'description', "trim|required");
        $this->form_validation->set_rules("benfits", 'benfits', "trim|required");
        $this->form_validation->set_rules("how_work", 'how_work', "trim|required");
        $this->form_validation->set_rules("image", 'Image', "trim|callback_image[$id]");

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->category_id = $this->input->post('category_id');
            $this->{$this->model}->description = $this->input->post('description');
            $this->{$this->model}->title = $this->input->post('title');
            $this->{$this->model}->benfits = $this->input->post('benfits');
            $this->{$this->model}->how_work = $this->input->post('how_work');


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

     public function image($var, $id) {
        $config['upload_path'] = './cdn/services/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->{$this->model}->image = base_url() . '/cdn/services/' . $data['file_name'];
        }
        return true;
    }
}
