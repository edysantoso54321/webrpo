<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

    public function get_pemilih() {
  		return $this->db->query("select * from pemilih")->result();
    }
    public function simpan_pemilih($noktp,$nama,$tgl,$jk,$status,$alamat){
    	return $this->db->query("INSERT INTO pemilih values('$noktp','$nama','$tgl','$jk','$status','$alamat')");
    }	
    public function delete_pemilih($noktp){
    	return $this->db->query("DELETE FROM pemilih where noktp='$noktp'");
    }

    
    public function cekpemilih($noktp,$nama) {
        return $this->db->query("select * from pemilih where noktp='$noktp' and nama='$nama'")->result();
    }
    

    public function getpemilih($noktp){
        return $this->db->query("select * from pemilih where noktp='$noktp'")->result();
    }


    public function getsemuapemilih(){
        return $this->db->query("select * from pemilih")->result();
    }   


}