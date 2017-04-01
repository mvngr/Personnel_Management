<?php

class Status_Order extends CI_Model {

 	function Status_Order() {
 		parent::__construct();
 		$this->load->database();
 		
 	}

 	function getStatus($id) {
 		$Q = $this->db->query('SELECT * FROM `status_of_internal_orders` WHERE `id_orders` = '.$id);
 		$data = array();
 		foreach ($Q->result() as $row) {
 			$data[] = $row->datetime.' > '.$this->getUserName($row->id_author).' > '.$row->description;
 		}
 		return $data;
 	}

 	function getUserName($id) {
 		$Q = $this->db->query('SELECT * FROM `users` WHERE `id` = '.$id)->result();
 		if($Q == null)
 			return ' - ';
 		$Q = $Q[0];
 		$Q = '<a href="/user/'.$Q->id.'/">'.$Q->name.'</a>';
 		return $Q;
 	}

 	function addComment($id, $id_user, $comment) {
 		$Q = $this->db->query("INSERT INTO `status_of_internal_orders` (`id`, `id_orders`, `id_author`, `description`, `datetime`) VALUES (NULL, '".$id."', '".$id_user."', '".$comment."', CURRENT_TIMESTAMP)");
 		return;
 	}

 	function kostil1() {
 		
 	}

 }