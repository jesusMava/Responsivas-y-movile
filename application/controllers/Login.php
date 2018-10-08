<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_Model');
		
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	function Validar()
	{
		$email=$this->input->post('email');
		$cve=sha1($this->input->post('cve'));
		$res=$this->Login_Model->get_Usuario($email,$cve);
		// print_r($res);

		if ($res) {
			// print_r($res);
			$this->session->set_userdata(
				array(
					'name' =>$res->Nombre.' '.$res->Apellidos,
					'rol' =>$res->Rol,
					'logged_in' => TRUE
					)
			);
			
			if ($res->Rol==1) {
				redirect(base_url().'/index.php/Dashboard');//se llama el controlador
				// $this->load->view('admin/Dashboard');
			}else{

			}
		}else{
			$data['error']=true;
			$this->load->view('admin/login',$data);
		}
		// $this->input->post(); 
		// print_r($_POST);

	}
}
?>