<?php

class Add_Order_Model extends CI_Model {

 	function Add_Order_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 	}


 	function checkRules() {

 		$arr = array('order', 'cost', 'to_group', 'deadline');
		$fill = true;

		foreach ($arr as $value) 
			if(!array_key_exists($value, $_GET) || $_GET == null)
				return null;


		$Q = $this->db->query("INSERT INTO `internal_orders` (`id`, `id_from_user`, `id_to_group`, `description`, `cost`, `id_to_user`, `deadline`, `complete`) VALUES (NULL, '".$this->session->id."', '".$_GET['to_group']."', '".$_GET['order']."', '".$_GET['cost']."', '0', '".$_GET['deadline']."', '0');");

		$Q = $this->db->insert_id();

		$this->load->model('status_order');

		$Q2 = $this->status_order->addComment($Q, 0, 'Заявка принята к рассмотрению');
			
		header( 'Location: /job/'.$Q );
 	}

}