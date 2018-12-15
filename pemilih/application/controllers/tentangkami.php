<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentangkami extends CI_Controller {

    public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
    }
	
	public function index(){
		$this->session->set_userdata('hlm','tentang_kami/index');
		redirect(base_url());
	}
}
