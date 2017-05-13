<?php

class User_Model extends CI_Model {

	private $id;

 	function User_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->id = $this->uri->segment(2);
 	}

 	function decode($str) {
 		$this->load->library('encrypt');
 		return $this->encrypt->decode($str);
 	}

 	function getRouteToImg($id) {
 		#/user_guide_src/source/images/users/
 		$Q = $this->db->query("SELECT * FROM `images` WHERE `id` = ".$id)->result();
 		if($Q == null)
 			return null;
 		$Q = $Q[0];

 		$res = '/user_guide_src/source/images/';
 		$res .= $Q->image_path.$Q->image_name.'.'.$Q->image_format;
 		return $res;
 	}

 	function newMess($mess) {
 		$this->db->query("INSERT INTO `messages` (`id`, `id_from_user`, `id_to_user`, `message`, `datetime`) VALUES (NULL, '".$this->session->id."', '".$this->id."', '".$mess."', CURRENT_TIMESTAMP);");

 		#Проверка на существование диалога
 		$Q1 = $this->db->query("SELECT `id` FROM `existing_conversations` WHERE `id_user1` = ".$this->session->id." AND `id_user2` = ".$this->id)->result();
 		$Q2 = $this->db->query("SELECT `id` FROM `existing_conversations` WHERE `id_user1` = ".$this->id." AND `id_user2` = ".$this->session->id)->result();
 		if(!($Q1 || $Q2))
 			$this->db->query("INSERT INTO `existing_conversations` (`id`, `id_user1`, `id_user2`, `datetime`) VALUES (NULL, '".$this->session->id."', '".$this->id."', CURRENT_TIMESTAMP);");
 		return;
 	}

 	function getData() {
 		$Q = $this->db->query("SELECT * FROM `users` WHERE `id` = ".$this->id)->result();
 		if($Q == null)
 			show_404();
 		$Q = $Q[0];

 		$Q->id_avatar = $this->getRouteToImg($Q->id_avatar);

 		$Q->email = $this->decode($Q->email);

 		return $Q;
 	}

}