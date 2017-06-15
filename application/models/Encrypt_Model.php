<?php

class Encrypt_Model extends CI_Model {

	private $id;

 	function Encrypt_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		$this->load->library('encrypt');
 		
 	}

 	function encode($msg) {
 		$encrypted_string = $this->necrypt->encode($msg);
 		return $encrypted_string;
 	}

 	function decode($msg) {
 		$encrypted_string = $this->encrypt->decode($msg);
 		return $encrypted_string;
 	}

 	function code() {
 		$Q = $this->db->query("SELECT * FROM `users` WHERE `id`")->result();

 		$str = '';

 		foreach ($Q as $row) {
 			$this->db->query("UPDATE `users` SET `email` = '".$this->encode($row->email)."' WHERE `users`.`id` = ".$row->id.";");
 			
 			$str .= 'id = '.$row->id.' | '.$row->password.'<br>';
 		}
 		return $str;
 	}

 }