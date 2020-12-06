<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	public function index()
	{
		$this->load->view('user/add');
	}

	public function save(){
		$nombre = $this->input->post("nombre");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$repeatPassord = $this->input->post("repeatPassord");

		$this->form_validation->set_rules('nombre', 'Nombre completo', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|valid_email|is_unique[usuarios.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[10]|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('repeatPassord', 'Confirma contraseña', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/add');
		}else{
			$data = array(
				"nombre"=>$nombre,
				"usuario"=>$nombre,
				"password"=>md5($password),
				"perfil"=>1,
				"estado"=>1,
				"ultimo_login"=>date("Y-m-d h:m:s"),
				"fecha"=>date("Y-m-d"),
				"intentos"=>1,
				"unidad"=>1,
				"email"=>$email
				
			);
			
			$this->User_model->save($data);
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			redirect(base_url()."usuarios");
		}
	}
}
