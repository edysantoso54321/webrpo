<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_koment extends CI_Model {

    public function tampilkoment(){
    	return $this->db->query("select (select nama from pemilih where noktp=koment.noktp) as pemilih, (select nama from kandidat where id=koment.id) as capres, pesan from koment")->result();
    }	

    public function deletekoment($noktp,$id){
        return $this->db->query("delete from koment where noktp='$noktp' and id='$id'");
    }
}