<?php

class GetJobM extends CI_Model {

	private $pages;

 	function GetJobM() {
 		parent::__construct();
 		$this->pages = 1;
 		$this->load->database();
 	}

 	function getQ() {

 		$Q = $this->db->get('internal_orders');
		
		return $Q; 		
 	}

 	function getUserName($id) {
 		$Q = $this->db->query('SELECT * FROM `users` WHERE `id` = '.$id)->result();
 		$Q = $Q[0];
 		$Q = $Q->name;
 		return $Q;
 	}

 	function cutStr($str, $lenght = 100, $end = '...', $charset = 'UTF-8', $token = '~') {
	    $str = strip_tags($str);
	    if (mb_strlen($str, $charset) >= $lenght) {
	        $wrap = wordwrap($str, $lenght, $token);
	        $str_cut = mb_substr($wrap, 0, mb_strpos($wrap, $token, 0, $charset), $charset);    
	        return $str_cut .= $end;
	    } else {
	        return $str;
	    }
	} 

 	function getInTable() {

 		$query = $this->getQ();

 		$table = '<table align="center">';
 		$table .= '<caption>Доступная работа:</caption>';
 		
 		$table .= '<th>Описание</th>';
 		$table .= '<th>Стоимость</th>';
 		$table .= '<th>Отправитель</th>';
 		$table .= '<th>Статус</th>';

 		if($query->num_rows() > 0)
	 		foreach ($query->result() as $row) {
	 			$name = $this->getUserName($row->id_from_user);
	 			$table .= '<tr><td><a href="/job/'.$row->id.'">'.$this->cutStr($row->description, 41);
	 			$table .= '</a></td><td>'.$row->cost;
	 			$table .= '</td><td>'.$name;
	 			if($row->complete == 0)
	 				if($row->id_to_user != 0)
	 					$table .= '</td><td>Выполняется</td></tr>';
	 				else
	 					$table .= '</td><td><a href="/job/'.$row->id.'/take/">Взять</button>'.'</td></tr>';
	 			else
	 				$table .= '</td><td><span style="color: green;">Выполнена</span></td></tr>';
	 		}

 		$table .= '</table>';

 		return $table;
 	}

}