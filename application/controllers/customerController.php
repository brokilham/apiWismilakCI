<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerController extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
			
		$this->load->model("t_customer_model");
	
    }
	public function getlist()
	{
		$this->load->view('welcome_message');
	}
}
