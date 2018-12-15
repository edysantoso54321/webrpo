<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_data');
    }
	
	public function insert($noktp,$nama,$tgl,$jk,$status,$alamat){
		$this->m_data->simpan_pemilih(urldecode($noktp),urldecode($nama),urldecode($tgl),urldecode($jk),urldecode($status),urldecode($alamat));
	}

	public function delete($data){
		$this->m_data->delete_pemilih(urldecode($data));
	}
}
