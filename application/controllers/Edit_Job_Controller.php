<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Edit_Job_Controller extends CI_Controller {

	function Edit_Job_Controller() {
	parent::__construct();

	$this->load->library('session');
 	$this->load->model('Edit_Job_Model');
	}

	function index(){
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
		$data['title'] = "Работа";

		/**
		 * TODO!!!
		 */
/*
		switch ($this->uri->segment(3)) {
 					case 'take':
 						if(array_key_exists('id', $_SESSION))
 						$this->setIdToUser($this->session->id);
 						header( 'Location: /job/'.$this->uri->segment(2) );
 						break;
 					case 'delete':
 						$this->deleteJob();

 						header( 'Location: /show/job_delete/' );
 						break;
 					case 'end':
 						$this->endJob();
 						header( 'Location: /job/'.$this->id );
 						break;

 					case 'cancel':
 						$this->cancel();
 						header( 'Location: /job/'.$this->id );
 						break;
 					case 'edit':
 						                                                                                                                                                                                                                                                                                                                                                                                            
 					break;
 					default:
 						show_404();
 						break;
 				}
*/
 		/**
 		 * end TODO
 		 */

		if(isset($_GET['order'])){
			$this->Edit_Job_Model->updateOrder();
			
			# добавляем коммент
			$this->load->model('Status_Order');
			$this->Status_Order->addComment($this->uri->segment(2), $this->session->id, 'отредактировал работу');

			header('Location: /job/'.$this->uri->segment(2));
			exit();
		}

		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();


		$temp = $this->Edit_Job_Model->getEditData();

		foreach ($temp as $key => $value) 
			$data[$key] = $value;

		$data['select'] = $this->Edit_Job_Model->getSelect();
		$data['deadline'] = $this->Edit_Job_Model->editDeadline($data['deadline']);

		$this->load->vars($data);
		$this->load->view('Edit_Job_View');
		

	}
}