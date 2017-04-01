<?php

class JobM extends CI_Model {

	private $id;
	private $data;

 	function JobM() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		$this->load->model('status_order');

 		

 		if($this->uri->segment(2))
 		{
 			$this->id = $this->uri->segment(2);

 			#сохраняю все данные о заказе
 			$this->data = $this->db->query('SELECT * FROM `internal_orders` WHERE `id` = '.$this->id)->result();
 		if($this->data == null) 
 			return;
 		else
	 		$this->data = $this->data[0];

 			if($this->uri->segment(3)) {
 				switch ($this->uri->segment(3)) {
 					case 'take':
 						if(array_key_exists('id', $_SESSION))
 						$this->setIdToUser($this->session->id);
 						header( 'Location: /job/'.$this->uri->segment(2) );
 						break;
 					case 'delete':
 						$this->deleteJob();

 						header( 'Location: /show/job_delete/' );
 						break;
 					case 'end':
 						$this->endJob();
 						header( 'Location: /job/'.$this->id );
 						break;

 					default:
 						show_404();
 						break;
 				}
 			}
 		}
 	}

 	function checkAccess() {
 		if($this->db->query("SELECT `id` FROM `internal_orders` WHERE `id` = ".$this->id." AND `id_to_user` = ".$this->session->id)->result() == null)
 			return false;
 		else
 			return true;
 	}

 	function endJob() {
 		if($this->checkAccess())
 			$this->db->query("UPDATE `internal_orders` SET `complete` = '1' WHERE `internal_orders`.`id` = ".$this->id);
 		$Q2 = $this->status_order->addComment($this->id, $this->session->id, 'Заявка выполнена');
 	}

 	function deleteJob() {
 		if($this->checkAccess())
 			$this->db->query("DELETE FROM `internal_orders` WHERE `internal_orders`.`id` = ".$this->id);
 		return;
 	}

 	function setIdToUser($id_user) {
 		#UPDATE `internal_orders` SET `id_to_user` = '0' WHERE `internal_orders`.`id` = 24;
 		$this->db->query("UPDATE `internal_orders` SET `id_to_user` = '$id_user' WHERE `internal_orders`.`id` = ".$this->id);

 		$Q2 = $this->status_order->addComment($this->id, $id_user, 'принял заявку');
 		return;
 	} 

 	function getUserName($id) {
 		$Q = $this->db->query('SELECT * FROM `users` WHERE `id` = '.$id)->result();
 		if($Q == null)
 			return ' - ';
 		$Q = $Q[0];
 		$Q = '<a href="/user/'.$Q->id.'/">'.$Q->name.'</a>'
 	;	return $Q;
 	}

 	function getNameGroup($id) {
 		$Q = $this->db->query('SELECT * FROM `id_groups` WHERE `id` = '.$id)->result();
 		if($Q == null)
 			return 'NULL';
 		$Q = $Q[0]->name;
 		return $Q;
 	}

 	function allInfo() {

 		$from_user = $this->getUserName($this->data->id_from_user);
 		$to_user = $this->getUserName($this->data->id_to_user);
 		$group = $this->getNameGroup($this->data->id_to_group);
 		$str = '<p>Описание: '.$this->data->description.'</p>';
 		$str .= '<p>Цена: '.$this->data->cost.'</p>';
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
 		if($this->data->complete == 0)
 			$str .= '<form action="" method="GET"><input type="text" class="line" autofocus name="comment" placeholder="Добавить комментарий"></form>';

 		if(isset($_GET) && array_key_exists('comment', $_GET)) {
 			if($_GET['comment'] != '')
	 			$this->db->query("INSERT INTO `status_of_internal_orders` (`id`, `id_orders`, `id_author`, `description`, `datetime`) VALUES (NULL, '".$this->id."', '".$this->session->id."' , '".$_GET['comment']."', CURRENT_TIMESTAMP);");

	 			#todo добавить конкретного пользователя

	 			header('Location: /job/'.$this->id);
 		}


 		#footer str
 		$str .= '<p align="center">';
 		$str .= '<a href="/job/">Доступная работа</a>';
 		if($this->data->id_to_user == 0 && $this->data->complete == 0)
 			$str .= ' | <a href="/job/'.$this->id.'/take/">Взять работу</a>';
 		if($this->checkAccess()) {
 			if($this->data->complete == 0)
 				$str .= ' | <a href="/job/'.$this->id.'/end/">Закрыть заявку</a>';
 			$str .= ' | <a href="/job/'.$this->id.'/delete/">Удалить</a>';
 		}
 		$str .= '</p>';
		return $str;
 	}
 }