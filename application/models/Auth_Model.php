<?php

class Auth_Model extends CI_Model {

	private $id;

 	function Auth_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		
 	}

 	function login($login, $pass) {

 		

 		$Q = $this->db->query("SELECT * FROM `users` WHERE `login` LIKE '".$login."' AND `password` LIKE '".$pass."'")->result_array();


 		if($Q == null)
 			return false;
 		$Q = $Q[0];

 		$arr = array();

 		foreach ($Q as $key => $value) {
 			$arr[$key] = $value;
 		}

 		$this->session->set_userdata($arr);
 		
 		return $arr;
 	}

}