<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["user"] = $this->User_model->getAll();
        $this->load->view("admin/user/list", $data);

    }

    public function add()
    {
        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        }
           
        $this->load->view("admin/user/new_form");
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect ('admin/user');
        
        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();

        $this->load->view("admin/user/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->User_model->delete($id)) {
            redirect(site_url('admin/user'));
        }
    }
}