<?php

class Study extends CI_Model {

 	function Study() {
 	  parent::__construct();
 	}

 	function getAll($arr_str) {

  	$res = array();
    $this->load->library('encrypt');

    foreach ($arr_str as $value) {
        
      $data = array();
      $data['param'] = $value;
      $data['encode'] = $this->encrypt->encode($value);
      $data['decode'] = $this->encrypt->decode($data['encode']);

      $res[] = $data;
    }
    


  	return $res;

	}

}