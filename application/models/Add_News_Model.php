<?php

class Add_News_Model extends CI_Model {

 	function Add_News_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 	}

 	function send() {
 		$this->db->query("INSERT INTO `news` (`id`, `subject`, `note`, `id_from_user`, `id_to_group`, `priority`, `datetime`) VALUES (NULL, '".$_GET['subject']."', '".$_GET['note']."', '".$this->session->id."', '".$_GET['id_to_group']."', '".$_GET['stars']."', CURRENT_TIMESTAMP);");
 		return $this->db->insert_id();
 	}
 	function getGroupsList() {
 		$Q = $this->db->query("SELECT * FROM `id_groups`")->result();
 		return $Q;
 	}

}