<?php

class New_Message_Model extends CI_Model {


 	function New_Message_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		
 	}

 	function getUserName($id) {
 		$Q = $this->db->query('SELECT `name` FROM `users` WHERE `id` = '.$id.' LIMIT 1')->result();
 		if($Q == null)
 			return ' - ';
 		$Q = $Q[0];
 		$Q = $Q->name;
 		return $Q;
 	}
 	function getUsersInExistConv() {
 		$this->id_users = $this->db->query("SELECT * FROM `existing_conversations` WHERE `id_user1` = ".$this->session->id." || `id_user2` = ".$this->session->id)->result();
 		$res = array();
 		foreach ($this->id_users as $value) { //берем массив из всех переписок, где участвует человек
 			if($this->session->id == $value->id_user1)
 			$temp = array('id_from_user' => $value->id_user2, 'name_from_user' => $this->getUserName($value->id_user2));
 			else
 				$temp = array('id_from_user' => $value->id_user1, 'name_from_user' => $this->getUserName($value->id_user1));
 			if($temp['id_from_user'] != $this->session->id)
 				$res[] = $temp;
 		}
 		return $res;
 	}

 	function getAllInGroup() {
 		$Q = $this->db->query("SELECT `id`, `name` FROM `users` WHERE `id_group` = ".$this->session->id_group)->result();
 		foreach ($Q as $key => $value) {
 			if($value->id == $this->session->id)
 				unset($Q[$key]);
 		}
 		return $Q;
 	}

 	function findInAllUsers($inp) {
 		$Q = $this->db->query("SELECT `id`, `name` FROM `users` WHERE `login` LIKE '".$inp."' OR `name` LIKE '".$inp."' OR `surname` LIKE '".$inp."'")->result();

 		foreach ($Q as $key => $value) {
 			if($value->id == $this->session->id)
 				unset($Q[$key]);
 		}

 		return $Q;
 	}

 	function newMess($mess, $id_to_user) {
 		$this->db->query("INSERT INTO `messages` (`id`, `id_from_user`, `id_to_user`, `message`, `datetime`) VALUES (NULL, '".$this->session->id."', '".$id_to_user."', '".$mess."', CURRENT_TIMESTAMP);");

 		#Проверка на существование диалога
 		$Q1 = $this->db->query("SELECT `id` FROM `existing_conversations` WHERE `id_user1` = ".$this->session->id." AND `id_user2` = ".$id_to_user)->result();
 		$Q2 = $this->db->query("SELECT `id` FROM `existing_conversations` WHERE `id_user1` = ".$id_to_user." AND `id_user2` = ".$this->session->id)->result();
 		if(!($Q1 || $Q2))
 			$this->db->query("INSERT INTO `existing_conversations` (`id`, `id_user1`, `id_user2`, `datetime`) VALUES (NULL, '".$this->session->id."', '".$id_to_user."', CURRENT_TIMESTAMP);");
 		return;
 	}

}