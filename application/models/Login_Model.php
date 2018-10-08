<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	function __construct(){
		parent::__construct();		
		}
	function get_Usuario($email,$cve){
		//usando activ record
		$this->db->where('Email',$email);
		$this->db->where('Cve',$cve);
		$query=$this->db->get('usuario');
		if ($query->row()) {
			return $query->row();
		}else{
			return false;
		}
	}
}
?>