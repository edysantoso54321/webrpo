<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kandidat extends CI_Model {

    public function get_kandidat() {
  		return $this->db->query("select * from kandidat")->result();
    }
    public function simpan_kandidat($id,$nama,$partai,$visimisi){
    	return $this->db->query("UPDATE kandidat SET nama='$nama', partai='$partai', visimisi='$visimisi' where id='$id'");
    }	
}