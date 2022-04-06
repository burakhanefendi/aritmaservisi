<?php

class Dashboard extends CIF_Controller {

    public $layout = 'full';
    public $module = 'dashboard';
    public $model = 'users';

    public function index() {
        $this->permission();
        $data['users'] = $this->db->get('users')->num_rows();
        $data['categories'] = $this->db->get('categories')->num_rows();
        $data['services'] = $this->db->get('services')->num_rows();
        $data['projects'] = $this->db->get('projects')->num_rows();
        $data['blog'] = $this->db->get('blog')->num_rows();
        $data['testimonials'] = $this->db->get('testimonials')->num_rows();
        $data['visitors'] = config('visitors');
        $this->load->view($this->module, $data);
    }

}
