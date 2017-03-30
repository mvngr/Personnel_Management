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
 			$data[] = $row->datetime.' '.$row->description;
 		}
 		return $data;
 	}

 	function addComment($id, $comment) {
 		$Q = $this->db->query("INSERT INTO `status_of_internal_orders` (`id`, `id_orders`, `description`, `datetime`) VALUES (NULL, '".$id."', '".$comment."', CURRENT_TIMESTAMP)");
 		return;
 	}

 }