<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
    private $_table = "user";

    public $id;
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],
                
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id) 
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();   
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));        
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

}