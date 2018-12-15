<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

    public function get_pemilih() {
  		return $this->db->query("select * from pemilih")->result();
    }
    public function edit_pemilih(){

    }
    public function simpan_pemilih($noktp,$nama,$tgl,$jk,$status,$alamat){
    	return $this->db->query("INSERT INTO pemilih values('$noktp','$nama','$tgl','$jk','$status','$alamat')");
    }	
    public function delete_pemilih($noktp){
        $this->db->query("DELETE FROM HASIL where noktp='$noktp'");
        $this->db->query("DELETE FROM koment where noktp='$noktp'");
        $this->db->query("DELETE FROM pemilih where noktp='$noktp'");
    }
}