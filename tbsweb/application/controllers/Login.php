<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_user');
			$this->load->model('m_data');
			$this->load->model('m_kandidat');
			$this->load->library('session');
    }
	
	public function index(){
		if ($this->session->has_userdata('adm') && $this->session->userdata('hlm')) $this->tampil($this->session->userdata('hlm'));
		else $this->tampil('login/index');
	}

#fungsi untuk beralih halaman
	public function tampil($hlm){
		if ($hlm=='data_pemilih/index'){
			$data['data']=$this->m_data->get_pemilih();
			$this->load->view($hlm,$data);
		}else if(($hlm=='calon_kandidat/index') || ($hlm=='home/index')){
			$data['data']=$this->m_kandidat->get_kandidat();
			$this->load->view($hlm,$data);
			#$this->logout();
		}
		else
		$this->load->view($hlm);
	}

#fungsi login
	public function signin(){
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
		$hasil = $this->m_user->login($email,$pass);
		foreach ($hasil as $key) {
			$data[]=$key->namaa;
		}
		if ($data) {
			$this->session->set_userdata('adm', $data[0]);
			$this->session->set_userdata('hlm','home/index');
			redirect(base_url());
		}
		else {
			$this->session->set_flashdata('message', 'login anda salah, silahkan login kembali');			
			redirect(base_url());
		}	
	}



	#simpankandidat
	public function update_kandidat(){
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$partai=$this->input->post('partai');
		$visimisi=$this->input->post('visimisi');
		$this->m_kandidat->simpan_kandidat($id,$nama,$partai,$visimisi);
		redirect(base_url());
	}


	#fungsi untuk daftar
	public function daftar(){
		$namaa = $this->input->post('namaa');
        $namab = $this->input->post('namab');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
		$hasil = $this->m_user->signup($namaa,$namab,$email,$pass);
		$this->session->set_flashdata('message', 'silahkan login');
		redirect(base_url());
	}


	#fungsi untuk logout dan redireck ke login
	public function logout(){
		$item=array('adm');
		$this->session->unset_userdata($item);
		redirect(base_url());
	}
}