<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	private $str = array();

	function Show() {
	parent::__construct();
	$this->load->library('session');
		if($this->uri->segment(2)) {
			$this->str['str'] = $this->uri->segment(2);
		}
		else
			show_404();
	}

	function index(){
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
		switch ($this->str['str']) {
			case 'job_taken':
				$this->str['str'] = 'Работа взята';
				break;
			case 'job_delete':
				$this->str['str'] = 'Работа удалена';
				break;
			case 'entered':
				$this->str['str'] = 'Вы уже вошли <br><br><a href="/login/out/" class="button">Выйти</a>';
				break;	
			
			default:
				show_404();
				break;
		}

		$this->load->vars($this->str);
		$this->load->view('Show_View');

	}
}