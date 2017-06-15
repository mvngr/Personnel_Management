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
 				header('Location: /login');
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
 		$Q = '<a href="/user/'.$Q->id.'">'.$Q->name.' '.$Q->surname.'</a>';

 		return $Q;
 	}

 	function queryOrders() {
 		$Q = $this->db->query('SELECT * FROM `internal_orders` WHERE `id_to_user` = '.$this->id.' AND `complete` = 0')->result();

	 	return $Q;
 	}

 	function queryMyOrders() {
 		$Q = $this->db->query('SELECT * FROM `internal_orders` WHERE `id_from_user` = '.$this->id.' AND `complete` = 0')->result();

	 	return $Q;
 	}

 	function queryStatus($id) {
 		$this->load->model('Status_Order');
 		$arr = $this->Status_Order->getStatus($id);

 		return $arr;
 	}

 	function getSimpleInfo() {
 		$str = $this->getInfo($this->queryOrders());

 		return $str;
 	}

 	function getMyOrdersInfo() {
 		$str = $this->getInfo($this->queryMyOrders());

 		return $str;
 	}

 	function getInfo($Q) {

 		$str = '<font size="2px">';
 		foreach ($Q as $row) {
 			$str .= '<div class="one_note"><table><tr><th><a href="/job/'.$row->id.'">'.$row->description.'</a></th></tr>';
 			$arr = $this->queryStatus($row->id);
 			$count = 0;
 			foreach ($arr as $ind) {
 				if($count < 10)
 					$str .= '<tr><td>'.$ind.'<td></tr>';
 				else{
 					$str .= '<tr><td>...<td></tr>';
 					break;
 				}
 				$count++;
 			}
 			$str .= '</table></div>';
 		}
 		
 		$str .= '</font>';

 		return $str;
 	}
 	

}