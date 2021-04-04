<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah_model extends CI_Model 
{
    private $_table = "data-sekolah";

    public $id_sekolah;
    public $nama_sekolah;
    public $gambar = "default.jpg";
    public $alamat;
    public $deskripsi;
    public $website;
    public $kontak;
    public $latitude;
    public $longitude;

    public function rules()
    {
        return [
            ['field' => 'nama_sekolah',
            'label' => 'Nama Sekolah',
            'rules' => 'required'],
                
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'latitude',
            'label' => 'Latitude',
            'rules' => 'required'],

            ['field' => 'longitude',
            'label' => 'Longitude',
            'rules' => 'required'],
                
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']             
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id) 
    {
        return $this->db->get_where($this->_table, ["id_sekolah" => $id])->row();   
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_sekolah = uniqid();
        $this->nama_sekolah = $post["nama_sekolah"];
        $this->gambar = $this->_uploadImage();
        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->website = $post["website"];
        $this->kontak = $post["kontak"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_sekolah = $post["id"];
        $this->nama_sekolah = $post["nama_sekolah"];

        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }

        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->website = $post["website"];
        $this->kontak = $post["kontak"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        $this->db->update($this->_table, $this, array('id_sekolah' => $post['id']));        
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_sekolah" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './upload/sekolah/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_sekolah;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    private function _deleteImage($id)
    {
    $product = $this->getById($id);
    if ($product->gambar != "default.jpg") {
	    $filename = explode(".", $product->gambar)[0];
		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    }
    }
}