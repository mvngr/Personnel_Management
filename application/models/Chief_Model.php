<?php

class Chief_Model extends CI_Model {

 	function Chief_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 	}



}
