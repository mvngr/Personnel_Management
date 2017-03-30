<?php

class Study extends CI_Model {

 	function Study() {
 		parent::__construct();
 	}

 	function getAll() {


  		$table = 'table ->> <ul>';

  		$this->load->database();
  		$query = $this->db->get('internal_orders');

 		if($query->num_rows() > 0)
	 		foreach ($query->result() as $row) {
	 			$table .= '<li>'.$row->description.'</li>';
	 		}

 		$table .= '</ul>';

  		#$query -> free_result();
  		$data = $table;

  		return $data;

  	}

}