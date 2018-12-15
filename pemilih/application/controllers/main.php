<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_data');
			$this->load->model('m_kandidat');
			$this->load->model('m_koment');
			$this->load->model('m_hasil');
			$this->load->library('session');
    }
#fungsi login	//130116211
    public function login(){
    	$noktp=$this->input->post('noktp');
    	$noktp=addslashes($noktp);
    	$nama=$this->input->post('nama');
    	$nama=addslashes($nama);
    	$hasil=$this->m_data->cekpemilih($noktp,$nama);
    	foreach ($hasil as $key) {
			$data[]=$key->noktp;
		}
		if ($data) {
			$this->session->set_userdata('user', $data[0]);
			$this->session->set_userdata('hlm','home/index');
			redirect(base_url());
		}
		else {
			$this->session->set_flashdata('message', 'login anda salah, silahkan login kembali');			
			redirect(base_url());
		}	
    }
//1301162111
	public function index(){
		if ($this->session->has_userdata('user') && $this->session->userdata('hlm')) $this->tampil($this->session->userdata('hlm'));
		else $this->tampil('login/index');
	}

#fungsi untuk beralih halaman //1301162111
	public function tampil($hlm){
		if ($hlm=='pilih/index'){
			$data['pesan']=$this->m_koment->tampilkoment();
			$data['hasil']=$this->m_hasil->gethasil();
			$noktp=$this->session->userdata('user');
			$data['ismilih']=$this->m_hasil->cekismilih($noktp);
			$data['data']=$this->m_kandidat->get_kandidat();
			$this->load->view($hlm,$data);
		}else if(($hlm=='calon_kandidat/index') || ($hlm=='home/index')){
			$data['data']=$this->m_kandidat->get_kandidat();
			$this->load->view($hlm,$data);
		}
		else
		$this->load->view($hlm);
	}

#fungsi untuk menyimpan koment//1301162111
	public function koment(){
		$komen=$this->input->post('komen');
		$id=$this->input->post('capres');
		$noktp=$this->session->userdata('user');	
		$this->m_koment->simpankoment($noktp,$id,$komen);
		redirect(base_url());
	}

	#fungsi untuk menyimpan data pilihan
	public function pilihcapres(){
		$id=$this->input->post('capres');
		$noktp=$this->input->post('noktp');
		$this->m_hasil->inserthasil($id,$noktp);
		redirect(base_url());
	}

	#fungsi untuk logout dan redireck ke login//1301162111
	public function logout(){
		$item=array('user');
		$this->session->unset_userdata($item);
		redirect(base_url());
	}


	
}