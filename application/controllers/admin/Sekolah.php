<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sekolah extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Sekolah_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view("admin/sekolah/list", $data);

    }

    public function add()
    {
        $sekolah = $this->Sekolah_model;
        $validation = $this->form_validation;
        $validation->set_rules($sekolah->rules());

        if ($validation->run()) {
            $sekolah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        }
           
        $this->load->view("admin/sekolah/new_form");
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect ('admin/sekolah');
        
        $sekolah = $this->Sekolah_model;
        $validation = $this->form_validation;
        $validation->set_rules($sekolah->rules());

        if ($validation->run()) {
            $sekolah->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sekolah"] = $sekolah->getById($id);
        if (!$data["sekolah"]) show_404();

        $this->load->view("admin/sekolah/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->Sekolah_model->delete($id)) {
            redirect(site_url('admin/sekolah'));
        }
    }
}