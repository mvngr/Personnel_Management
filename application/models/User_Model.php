<?php

class User_Model extends CI_Model {

	private $id;

 	function User_Model() {
 		parent::__construct();
 		$this->load->database();
 		$this->id = $this->uri->segment(2);
 	}

 	function getRouteToImg($id) {
 		#/user_guide_src/source/images/users/
 		$Q = $this->db->query("SELECT * FROM `images` WHERE `id` = ".$id)->result();
 		if($Q == null)
 			return null;
 		$Q = $Q[0];

 		$res = '/user_guide_src/source/images/';
 		$res .= $Q->image_path.$Q->image_name.'.'.$Q->image_format;
 		return $res;
 	}

 	function resizeImg($route) {
 		$config['image_library'] = 'gd2';
		$config['source_image'] = $route;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 200;
		$config['height'] = 200;
		$config['new_image'] = $route;
		$this->load->library('image_lib', $config);

		$img = $this->image_lib->resize();
		return $img;
 	}

 	function getData() {
 		$Q = $this->db->query("SELECT * FROM `users` WHERE `id` = ".$this->id)->result();
 		if($Q == null)
 			show_404();
 		$Q = $Q[0];

 		$img = $this->getRouteToImg($Q->id_avatar);
 		$Q->id_avatar = $img;

 		return $Q;
 	}

}