<?php

class Auth_Model extends CI_Model {

	private $id;

 	function Auth_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		
 	}

 	function decode($str) {
 		$this->load->library('encrypt');
 		return $this->encrypt->decode($str);
 	}

 	function login($login, $pass) {

 		

 		$Q = $this->db->query("SELECT * FROM `users` WHERE `login` LIKE '".$login."' LIMIT 1")->result();


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