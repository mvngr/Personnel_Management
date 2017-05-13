<?php

class Registration_Model extends CI_Model {

 	function Registration_Model() {
 		parent::__construct();
 		$this->load->database();
 		
 	}

 	function checkKey($rkey) {
 		$Q = $this->db->query("SELECT * FROM `access_registration` WHERE `used` = 0 AND `rkey` LIKE '".$rkey."'")->result();

 		if($Q == null)
 			return false;
 		else 
 			return true;
 	}

 	function getGroupsList() {
 		$Q = $this->db->query("SELECT * FROM `id_groups`")->result();
 		return $Q;
 	}

 	function checkLogin($login) {
 		$Q = $this->db->query("SELECT `name` FROM `users` WHERE `login` LIKE '".$login."'")->result();
 		if($Q == null)
 			return false;
 		else
 			return true;
 	}

 	function checkMail($email) {
 		$Q = $this->db->query("SELECT `name` FROM `users` WHERE `email` LIKE '".$email."'")->result();
 		if($Q == null)
 			return false;
 		else
 			return true;
 	}

 	function addNewUser() {
 		$this->db->query("INSERT INTO `users` (`id`, `login`, `password`, `id_post`, `name`, `surname`, `id_avatar`, `email`, `birthday`, `id_group`, `id_invited`) VALUES (NULL, '".$_POST['login']."', '".$this->encode($_POST['pass'])."', '3', '".$_POST['fname']."', '".$_POST['lname']."', '6', '".$_POST['email']."', '".$_POST['birthday']."', '".$_POST['group']."', '1');"); #todo приглашен изменить + добавить группы
 		$this->db->query("UPDATE `access_registration` SET `used` = '1' WHERE `access_registration`.`rkey` = '".$this->uri->segment(2)."'");
 		return $this->db->insert_id();
 	}
 	/**
 	 * Кодирование какой-либо строки
 	 * @param  string $str входная строка
 	 * @return string закодированная строка
 	 */
 	function encode($str) {
 		$this->load->library('encrypt');
 		return $this->encrypt->encode($str);
 	}

 	function addNewKey($id_creator) {
 		$key = ''; 
		$array = array_merge(range('A','Z'),range('a','z'),range('0','9')); 
		$c = count($array); 
		for($i=0;$i<32;$i++)
			$key .= $array[rand(0,$c-1)];
		$this->db->query("INSERT INTO `access_registration` (`id`, `used`, `rkey`, `id_creator`, `datetime`) VALUES (NULL, '0', '".$key."', '".$id_creator."', CURRENT_TIMESTAMP);");
		return $key;
 	}

 	function checkData() {
 		if($this->checkLogin($_POST['login']))
 			return 'Логин уже существует';
 		if($this->checkMail($_POST['email']))
 			return 'Почта уже зарегестрированна';
 		if($_POST['pass'] != $_POST['repeat_pass'])
 			return 'Пароли не совпадают';
 		
 		$this->addNewUser();
 		header('Location: /');
 		exit();
 		
 	}
}