<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kandidat extends CI_Model {

    public function get_kandidat() {
  		return $this->db->query("select * from kandidat")->result();
    }	
}