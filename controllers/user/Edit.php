<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	public function index($id)
	{   
        $data=$this->User_model->getUser($id);
		$this->load->view('user/edit',$data);
	}

	public function update($id){
		$nombre = $this->input->post("nombre");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
        $repeatPassord = $this->input->post("repeatPassord");
        
        $data=$this->User_model->getUser($id);

        $validateEMail="";
        
        if($email!=$data->email){
            $validateEMail="|is_unique[usuarios.email]";
        }

		$this->form_validation->set_rules('nombre', 'Nombre completo', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|valid_email'.$validateEMail);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('repeatPassord', 'Confirma contraseña', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
			$this->index($id);
		}else{
			$data = array(
				"nombre"=>$nombre,
				"email"=>$email,
                "password"=>md5($password),
                "fecha"=>date("Y-m-d h:m:s")
			);
			
			$this->User_model->update($data,$id);
			$this->session->set_flashdata('success', 'Los datos actualizaron correctamente');
			redirect(base_url()."usuarios");
		}
	}
}
