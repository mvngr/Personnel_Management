<?php

class One_News_Model extends CI_Model {

 	function One_News_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 	}


}