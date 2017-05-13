<?php

class Edit_Job_Model extends CI_Model {

	private $id;
	private $data;

 	function Edit_Job_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');

 		$this->id = $this->uri->segment(2);

 		$this->data = $this->db->query('SELECT * FROM `internal_orders` WHERE `id` = '.$this->id)->result();
 		if($this->data == null) 
 			return;
 		else
	 		$this->data = $this->data[0];
 	}

 	function getEditData() {
 		return $this->data;
 	}
 	function editDeadline($deadline){
 		return substr($deadline, 0, 10);
 	}
 	function getSelect() {
 		return $this->db->query("SELECT * FROM `id_groups`")->result();
 	}
 	function updateOrder(){
 		if(isset($_GET['order'] )){
 			$this->db->query("UPDATE `internal_orders` SET `description` = '".$_GET['order']."', `id_to_group` = ".$_GET['to_group'].", `cost` = '".$_GET['cost']."', `deadline` = '".$_GET['deadline']."' WHERE `internal_orders`.`id` = ".$this->id.";");
 		}
 	}


}
