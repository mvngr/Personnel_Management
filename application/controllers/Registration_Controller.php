<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_Controller extends CI_Controller {

	private $rkey;

	function Registration_Controller() {
		parent::__construct();

		$this->load->library('session');

		if(!$this->uri->segment(2))
	 		show_404();
	 	else
	 		$this->rkey = $this->uri->segment(2);

	 	$this->load->model('Registration_Model');

	 	if(!$this->Registration_Model->checkKey($this->rkey))
	 		show_404(); #todo должен показывать 403

	}

	function index(){

		$data['title'] = "Закрытая регистрация";
		$data['info'] = '';		
		$data['select'] = $this->Registration_Model->getGroupsList();

		if(isset($_POST) && array_key_exists('lname', $_POST))
			$data['info'] = $this->Registration_Model->checkData();

		$data['rkey'] = $this->rkey;
		$this->load->vars($data);
		$this->load->view('Registration_View');
	}
}