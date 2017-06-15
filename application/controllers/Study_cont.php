<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study_cont extends CI_Controller {

	function Study_cont() {
	parent::__construct();
	$this->load->library('session');
 	$this->load->model('Study');
 	$this->load->helper(array('form', 'url'));
	}

	function index(){
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
 		$error = array('error' => ' ');
	 	#$this-> load-> vars($temp);
	 	$this-> load-> view('Study', $error);
	}

	public function do_upload()
        {
                $config['upload_path']          = '/user_guide_src/source/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('Study_cont', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}