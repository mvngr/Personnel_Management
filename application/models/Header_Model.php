<?php

class Header_Model extends CI_Model {

	private $id;

 	function Header_Model() {
 		parent::__construct();
 		$this->load->library('session');
 		$this->load->database();
 	}

 	function loadAll() {
 		$res = array();
 		$res['bool_this_chief'] = $this->getBoolСhief();
 		$res['count_new_mess'] = $this->getUnreadMessCount();
 		return $res;
 	}

 	function getBoolСhief() {
 		if($this->session->id_post == 2)
 			return true;
 		else
 			return false;
 	}

 	function getUnreadMessCount() {
 		$Q = $this->db->query("SELECT COUNT(0) FROM `messages` WHERE `id_to_user` = ".$this->session->id." AND `delivered` = 0")->result();
 		$Q = $Q[0];
 		foreach ($Q as $key => $value) #костыль, ибо очень долго сидел и не мог понять как достать COUNT(0)
 			$Q = $value;
 		return $Q;
 	}

}