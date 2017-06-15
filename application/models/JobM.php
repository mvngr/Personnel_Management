<?php

class JobM extends CI_Model {

	private $id;
	private $data;

 	function JobM() {
 		parent::__construct();
 		$this->load->database();
 		$this->load->library('session');
 		$this->load->model('Status_Order');

 		

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
 				if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
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

 					case 'cancel':
 						$this->cancel();
 						header( 'Location: /job/'.$this->id );
 						break;
 					case 'resume':
 						$this->resume();
 						header( 'Location: /job/'.$this->id );
 						break;
 					default:
 						show_404();
 						break;
 				}
 			}
 		}
 	}

 	function getEditData() {
 		return $this->data;
 	}

 	function checkAccess() {
 		if($this->db->query("SELECT `id` FROM `internal_orders` WHERE `id` = ".$this->id." AND `id_to_user` = ".$this->session->id)->result() == null)
 			return false;
 		else
 			return true;
 	}

 	function cancel() {
 		$this->db->query("UPDATE `internal_orders` SET `id_to_user` = '0' WHERE `internal_orders`.`id` = ".$this->id.";");
 		$this->Status_Order->addComment($this->id, $this->session->id, 'отказался от заявки');
 		return;
 	}

 	function resume() {
 		$this->db->query("UPDATE `internal_orders` SET `complete` = '0' WHERE `internal_orders`.`id` = ".$this->id.";");
 		$this->Status_Order->addComment($this->id, $this->session->id, 'восстановил заявку');
 		return;
 	}

 	function endJob() {
 		if($this->checkAccess())
 			$this->db->query("UPDATE `internal_orders` SET `complete` = '1' WHERE `internal_orders`.`id` = ".$this->id);
 		$Q2 = $this->Status_Order->addComment($this->id, $this->session->id, 'Заявка выполнена');
 	}

 	function deleteJob() {
 		if($this->checkAccess())
 			$this->db->query("DELETE FROM `internal_orders` WHERE `internal_orders`.`id` = ".$this->id);
 		return;
 	}

 	function setIdToUser($id_user) {
 		#UPDATE `internal_orders` SET `id_to_user` = '0' WHERE `internal_orders`.`id` = 24;
 		$this->db->query("UPDATE `internal_orders` SET `id_to_user` = '".$id_user."' WHERE `internal_orders`.`id` = ".$this->id);

 		$Q2 = $this->Status_Order->addComment($this->id, $id_user, 'принял заявку');
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
 		$str .= '<p>Срок сдачи работы: '.$this->data->deadline.'</p>';

 		#записки о состоянии
 		$arr = $this->Status_Order->getStatus($this->id);
 		$str .= '<br>';
 		foreach ($arr as $row)
 			$str .= '<font size="2px">'.$row.'</font><br>';

 		if($this->data->complete == 0)
 			$str .= '<form action="" method="GET"><input type="text" class="line" autofocus name="comment" placeholder="Добавить комментарий"></form>';

 		if(isset($_GET) && array_key_exists('comment', $_GET)) {
 			if($_GET['comment'] != '')
	 			$this->db->query("INSERT INTO `status_of_internal_orders` (`id`, `id_orders`, `id_author`, `description`, `datetime`) VALUES (NULL, '".$this->id."', '".$this->session->id."' , '".$_GET['comment']."', CURRENT_TIMESTAMP);");

	 			header('Location: /job/'.$this->id);
 		}


 		#footer str
 		$str .= '<p align="center">';
 		$str .= '<a href="/job/">Доступная работа</a>';
 		if($this->data->id_to_user == 0 && $this->data->complete == 0)
 			$str .= ' | <a href="/job/'.$this->id.'/take/">Взять работу</a>';
 		if($this->checkAccess()) {
 			if($this->data->complete == 0) {
 				$str .= ' | <a href="/job/'.$this->id.'/end/">Закрыть заявку</a>';
 				$str .= ' | <a href="/job/'.$this->id.'/cancel/">Отказаться</a>';
 				$str .= ' | <a href="/job/'.$this->id.'/edit/">Редактировать</a>';
 			}
 			else
 				$str .= ' | <a href="/job/'.$this->id.'/resume/">Возобновить</a>';
 			$str .= ' | <a href="/job/'.$this->id.'/delete/">Удалить</a>';
 		}
 		$str .= '</p>';
		return $str;
 	}
 }