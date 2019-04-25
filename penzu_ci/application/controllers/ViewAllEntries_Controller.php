<?php


class ViewAllEntries_Controller extends CI_Controller {


   function __construct(){
 		parent::__construct();
 		$this->load->library(array('form_validation'));
 		$this->load->helper(array('url','form'));
		 $this->load->model('EntriesModel'); //call model
		 $this->load->model('AccountModel');
 }
	public function index()
	{
		$data['entries'] = $this->EntriesModel->getDataJurnal();
		///
		$where = array('id_user' => $this->session->userdata('id'));
		$data['akuns'] = $this->AccountModel->edit_data($where,'akun');
		$this->load->view('ViewAllEntries',$data);
	}

	//////////
	
    
    function edit($id_user){
		$where = array('id_user' => $id_user);
		$data['akuns'] = $this->AccountModel->edit_data($where,'akun');
		$this->load->view('Accountsetting',$data);
    }

    function update(){
        $first_name = $this->input->post('firstName');
        $last_name = $this->input->post('lastName');
        $email = $this->input->post('email');
     
        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email
        );
     
        $where = array(
            'id_user' => $this->session->userdata('id')
        );
     
        $this->AccountModel->update_data($where,$data,'akun');
        redirect('AccountController');
    
}
}
