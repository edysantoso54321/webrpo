<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function login($email,$pass) {
        return $this->db->query("select * from user".
		                          " where email='$email' and password='$pass'")->result();
    }
    public function signup($namaa,$namab,$email,$pass){
    	return $this->db->query("INSERT INTO user values('$namaa','$namab','$email','$pass')");
    }	
}