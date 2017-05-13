<?php

class News_Model extends CI_Model {

 	function News_Model() {
 		parent::__construct();
 		$this->load->database();
 	}

 	function getNews() {
 		$Q = $this->db->query("SELECT `id`, `subject`, `id_from_user`, `priority`, `datetime` FROM `news`")->result();
 		$this->changeValues($Q);
 		return $Q;
 	}

 	function getGroup($id) {
 		$Q = $this->db->query("SELECT `name` FROM `id_groups` WHERE `id` = ".$id." LIMIT 1")->result();
 		return $Q[0]->name;
 	}

 	function changeValues($change) {
 		foreach ($change as $key => $value) {
 			$value->subject = '<a href="/news/'.$value->id.'">'.$value->subject.'</a>';
 			$temp = $this->getName($value->id_from_user);
 			$temp = $temp->name.' '.$temp->surname;
 			$value->id_from_user = '<a href="/user/'.$value->id_from_user.'">'.$temp.'</a>';
 			unset($change[$key]->id); #удаляем id из конечной таблицы
 		}
 	}

 	function getName($id) {
 		$Q = $this->db->query("SELECT `name`, `surname` FROM `users` WHERE `id` = ".$id." LIMIT 1")->result();
 		return $Q[0];
 	}

 	function translateColumn($col) {
 		switch ($col) {
 			case 'subject':
 				return 'Тема';
 				break;

 			case 'id_from_user':
 				return 'Прислал';
 				break;

 			case 'priority':
 				return 'Приоритет';
 				break;

 			case 'datetime':
 				return 'Опубликованно';
 				break;
 			
 			default:
 				return '-';
 				break;
 		}
 	}

 	function getColumnName() {
 		$Q = $this->db->query("SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'news' ORDER BY ORDINAL_POSITION")->result();

 		$kostil = array();
 		foreach ($Q as $value) 
 			foreach ($value as $value2) {
 				$kostil[] = $value2;
 			}

 		foreach ($kostil as $key => $value) {
 			switch ($value) {
 				case 'id':
 					unset($kostil[$key]);
 					break;
 				case 'note':
 					unset($kostil[$key]);
 					break;
 				case 'id_to_group':
 					unset($kostil[$key]);
 					break;
 				
 				default:
 					$kostil[$key] = $this->translateColumn($value);
 					break;
 			}
 		}
 		return $kostil;
 	}

}