<?php

class JobM extends CI_Model {

	private $id;

 	function JobM() {
 		parent::__construct();
 		$this->load->database();
 		if($this->uri->segment(2))
 		{
 			$this->id = $this->uri->segment(2, -1);
 			if($this->uri->segment(3)) {
 				switch ($this->uri->segment(3)) {
 					case 'take':
 						$this->setIdToUser(3); #todo привязать к сессии
 						header( 'Location: /jobtaken/' );
 						break;
 					
 					default:
 						show_error('tyt');
 						break;
 				}
 			}
 		}
 	}

 	function setIdToUser($id_user) {
 		#UPDATE `internal_orders` SET `id_to_user` = '0' WHERE `internal_orders`.`id` = 24;
 		$this->db->query("UPDATE `internal_orders` SET `id_to_user` = '$id_user' WHERE `internal_orders`.`id` = ".$this->uri->segment(2));
 		return;
 	} 

 	function getUserName($id) {
 		$Q = $this->db->query('SELECT * FROM `users` WHERE `id` = '.$id)->result();
 		if($Q == null)
 			return ' - ';
 		$Q = $Q[0];
 		$Q = $Q->name.' '.$Q->surname;
 		return $Q;
 	}

 	function getNameGroup($id) {
 		$Q = $this->db->query('SELECT * FROM `id_groups` WHERE `id` = '.$id)->result();
 		if($Q == null)
 			return 'NULL';
 		$Q = $Q[0]->name;
 		return $Q;
 	}

 	function allInfo() {
 		$Q = $this->db->query('SELECT * FROM `internal_orders` WHERE `id` = '.$this->id)->result();
 		if($Q == null) 
 			show_404();
 		else {
	 		$Q = $Q[0];
	 		$from_user = $this->getUserName($Q->id_from_user);
	 		$to_user = $this->getUserName($Q->id_to_user);
	 		$group = $this->getNameGroup($Q->id_to_group);
	 		$str = '<p>Описание: '.$Q->description.'</p>';
	 		$str .= '<p>Цена: '.$Q->cost.'</p>';
	 		$str .= '<p>От: '.$from_user.'</p>';
	 		$str .= '<p>Отделу: '.$group.'</p>';
	 		$str .= '<p>Обрабатывает: '.$to_user.'</p>';

	 		#записки о состоянии
	 		$this->load->model('status_order');
	 		$arr = $this->status_order->getStatus($this->id);
	 		$str .= '<br>';
	 		foreach ($arr as $row)
	 			$str .= '<font size="2px">'.$row.'</font><br>';
	 		#todo добавление комментария

	 		#footer str
	 		$str .= '<p align="center">';
	 		$str .= '<a href="/job/">Доступная работа</a>';
	 		if($Q->id_to_user == 0 && $Q->complete == 0)
	 			$str .= ' | <a href="/job/'.$this->id.'/take/">Взять работу</a>';
	 		$str .= '</p>';
 			return $str;
 		}
 	}
 }