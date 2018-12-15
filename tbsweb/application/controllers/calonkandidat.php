<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calonkandidat extends CI_Controller {

    public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
    }
	
	public function index(){
		$this->session->set_userdata('hlm','calon_kandidat/index');
		redirect(base_url());
	}
}
