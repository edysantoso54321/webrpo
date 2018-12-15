<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil extends CI_Model {

    public function gethasil() {
        return $this->db->query("select (select count(*) from pemilih) as total, count(noktp) as jumlah, 'calon 1' as id from hasil where id=1 union select (select count(*) from pemilih) as total, count(noktp) as jumlah, 'calon 2' from hasil where id=2 union select (select count(*) from pemilih) as total, count(noktp) as jumlah, 'calon 3' from hasil where id=3 union select (select count(*) from pemilih) as total, (select count(*) from pemilih)-count(noktp) as jumlah, 'golput' from hasil;")->result();
    }
    public function inserthasil($id,$noktp){
    	return $this->db->query("INSERT INTO hasil values($id,'$noktp')");
    }

    public function cekismilih($noktp){
    	return $this->db->query("select * from hasil where noktp='$noktp'")->row();
    }	
}