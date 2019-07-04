<?php defined('BASEPATH') OR exit('No direct script access allowed');
class t_customer_model extends CI_Model
{
    private $_table = "t_customer_model";
    
    /*public function rules()
    {
        return [
            ['field' => 'Id',
            'label' => 'Id',
            'rules' => 'required'],

            ['field' => 'Description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }*/

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function Add()
    {
        return null;
    }


    public function edit()
    {
        return null;
    }


    public function delete()
    {
        return null;
    }

   

    
}