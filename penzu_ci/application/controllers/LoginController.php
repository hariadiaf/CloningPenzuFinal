<?php

class LoginController extends CI_Controller {
    
	public function index()
	{
		$this->load->view('Login');
	}

    public function doLogin(){
        $email = $this->input->post('email',true);
        $password = $this->input->post('pass',true);

        $res = $this->LoginModel->getUserLogin($email,$password);
        
        if($res != null){
            redirect('JurnalController');
        }else{
            redirect('LoginController');
        }
    }
}