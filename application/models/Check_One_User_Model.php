<?php

class Check_One_User_Model extends CI_Model {

	private $id;

 	function Check_One_User_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		
 		$this->id = $this->uri->segment(2, -1);
 		if($this->id == -1) {
 			if(array_key_exists('id', $_SESSION))
 				$this->id = $this->session->id;
 			else
 				show_404();
 		}

 	}

 	function set_id($id) {
 		$this->id = $this->session->id;
 		return true;
 	}

 	function queryUser() {
 		$Q = $this->db->query("SELECT * FROM `users` WHERE `id` = ".$this->id)->result();
 		if($Q == null)
 			show_404();
 		else
 			$Q = $Q[0];

 		return $Q;
 	}

 	function queryOrders() {
 		$Q = $this->db->query('SELECT * FROM `internal_orders` WHERE `id_to_user` = '.$this->id.' AND `complete` = 0')->result();

	 	return $Q;
 	}

 	function queryStatus($id) {
 		$this->load->model('status_order');
 		$arr = $this->status_order->getStatus($id);

 		return $arr;
 	}

 	function getSimpleInfo() {
 		$r = $this->getInfo();
 		$str = $r['name'];
 		$str .= '<br>';
 		$str .= $r['tables'];

	 	$str .= '<p align="center">';
	 	$str .= '<a href="/">На главную</a>';
	 	$str .= '</p>';

 		return $str;
 	}

 	function getInfo() {

 		$res = array();

 		$Q = $this->queryUser();
 		$res['name'] = '<h2>'.$Q->name.' '.$Q->surname.'</h2>';
 		$str = '<font size="2px">';
 		$Q = $this->queryOrders();
 		foreach ($Q as $row) {
 			$str .= '<table width="300px"><tr><th><a href="/job/'.$row->id.'">'.$row->description.'</a></th></tr>';
 			$arr = $this->queryStatus($row->id);
 			foreach ($arr as $ind) {
 				$str .= '<tr><td>'.$ind.'<td></tr>';
 			}
 			$str .= '</table><br>';
 		}
 		
 		$str .= '</font>';
 		$res['tables'] = $str;

 		return $res;
 	}
 	

}