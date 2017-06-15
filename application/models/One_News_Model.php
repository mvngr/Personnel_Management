<?php

class One_News_Model extends CI_Model {

	private $id;

 	function One_News_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');

 		$this->id = $this->uri->segment(2);
 	}

 	function allInfo(){
 		$Q = $this->db->query("SELECT * FROM `news` WHERE `id` = ".$this->id.' LIMIT 1')->result();
 		$Q = $Q[0];
 		$arr = array();

 		$arr['subject'] = $Q->subject;
 		$arr['note'] = $Q->note;
 		$arr['author'] = $this->getUserName($Q->id_from_user);
 		$arr['rating'] = $Q->priority;

 		$Q = $this->db->query("SELECT `subject`, `id` FROM `news`")->result();

 		$struct = array();

 		foreach ($Q as $key => $value) {
 			$struct[] = $value;
 		}

 		$arr['other_news'] = $struct;

 		return $arr;
 	}

 	function getUserName($id) {
 		$Q = $this->db->query('SELECT * FROM `users` WHERE `id` = '.$id)->result();
 		if($Q == null)
 			return ' - ';
 		$Q = $Q[0];
 		$Q = '<a href="/user/'.$Q->id.'/">'.$Q->name.'</a>';
 		return $Q;
 	}
}