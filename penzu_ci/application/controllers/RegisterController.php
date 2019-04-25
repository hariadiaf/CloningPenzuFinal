<?php

class RegisterController extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('RegisterModel'); //call model
}

	public function index() {

		$this->form_validation->set_rules('first_name', 'FIRST_NAME','required');
		$this->form_validation->set_rules('last_name', 'LAST_NAME','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('Register');
		}else{

			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] 	= $this->input->post('last_name');
			$data['email']  		= $this->input->post('email');
			$data['password'] 	= $this->input->post('password');

			$this->RegisterModel->daftar($data);
			
			$pesan['message'] = "Pendaftaran berhasil";
			
			$this->load->view('Login',$pesan);
	}
}
}