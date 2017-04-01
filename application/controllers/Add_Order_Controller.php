<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Order_Controller extends CI_Controller {
	function Add_Order_Controller() {
		parent::__construct();

		$this->load->library('session');
		
	 	$this->load->model('add_order_model');
	}

	function index(){

		$data['title'] = "Добавить заявку";

		#$data['maindata'] = $this->getjobm->getInTable();

		

		if(isset($_GET))
		{
			$data = $this->add_order_model->checkRules();
			
		}

		$this->load->vars($data);

		$this->load->view('add_order_view');
	}
}