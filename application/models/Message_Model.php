<?php

class Message_Model extends CI_Model {

	private $id_user_conv;
	private $id_users;
	/**
	 * $def_limit_mess - переменная, которая определяет сколько последних сообщений будут выводится
	 * @var integer
	 */
	private $def_limit_mess = 30;

 	function Message_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		$this->load->library('encrypt');
 		
 		if($this->uri->segment(2))
 			$this->id_user_conv = $this->uri->segment(2);
 		else
 			$this->id_user_conv = 1;
 	}

 	function setСonv($id) {
 		$this->id_user_conv = $id;
 		return;
 	}

 	function getUserName($id) {
 		$Q = $this->db->query('SELECT * FROM `users` WHERE `id` = '.$id.' LIMIT 1')->result();
 		if($Q == null)
 			return ' - ';
 		$Q = $Q[0];
 		$Q = $Q->name;
 		return $Q;
 	}
 	function getUsersInExistConv() {
 		$this->id_users = $this->db->query("SELECT * FROM `existing_conversations` WHERE `id_user1` = ".$this->session->id." || `id_user2` = ".$this->session->id)->result();
 		$res = array();
 		foreach ($this->id_users as $value) { #берем массив из всех переписок, где участвует человек
 			if($this->session->id == $value->id_user1) #приводим к одному виду исходящие и входящие
 			$temp = array('id_from_user' => $value->id_user2, 'name_from_user' => $this->getUserName($value->id_user2)); 
 			else
 				$temp = array('id_from_user' => $value->id_user1, 'name_from_user' => $this->getUserName($value->id_user1));

 			$count = $this->getUnreadMessCount($temp['id_from_user']);
 			if($count > 0)
 				$temp['name_from_user'] .= ' +'.$count;
 			$res[] = $temp;
 		}
 		return $res;
 	}
 	function getLimitMess() {	
 		$Q = $this->db->query("SELECT * FROM `messages` WHERE `id_from_user` in (".$this->session->id.",".$this->id_user_conv.") AND `id_to_user` in (".$this->id_user_conv.",".$this->session->id.")  ORDER BY `id` ASC LIMIT 30")->result();

 		foreach ($Q as $value) {
 			$value->id_from_user_name = $this->getUserName($value->id_from_user);
 			if($value->delivered == 0 && $value->id_to_user == $this->session->id)
 				$this->messRead($value->id);
 		}
 		return $Q;
 	}

 	function getUnreadMessCount($id) {
 		$Q = $this->db->query("SELECT COUNT(0) FROM `messages` WHERE `id_to_user` = ".$this->session->id." AND `id_from_user` = ".$id." AND `delivered` = 0")->result();
 		$Q = $Q[0];
 		foreach ($Q as $key => $value) #костыль, ибо очень долго сидел и не мог понять как достать COUNT(0)
 			$Q = $value;
 		return $Q;
 	}

 	function messRead($id) {
 		$this->db->query("UPDATE `messages` SET `delivered` = '1' WHERE `messages`.`id` = ".$id);
 		return;
 	}

 	function addNewMess($mess) {
 		$this->db->query("INSERT INTO `messages` (`id`, `id_from_user`, `id_to_user`, `message`, `datetime`) VALUES (NULL, '".$this->session->id."', '".$this->id_user_conv."', '".$mess."', CURRENT_TIMESTAMP);");
 		return;
 	}

}