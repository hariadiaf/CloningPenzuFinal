<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entries_Controller extends CI_Controller {
function __construct(){
       parent::__construct();
       $this->load->library(array('form_validation'));
       $this->load->helper(array('url','form'));
       $this->load->model('EntriesModel');
       $this->load->model('AccountModel');
  }

	public function index()
	{
      $data["entri"] = $this->EntriesModel->getDataJurnal();
      ///
      $where = array('id_user' => $this->session->userdata('id'));
		  $data['akuns'] = $this->AccountModel->edit_data($where,'akun');
			$this->load->view('entries',$data);

	}
  public function tambahEntries(){

        $data = array(
            "title" => $this->input->post('title'),
            "text" => $this->input->post('deskripsi'),
            "date" => date('Y-m-d H:i:s'),
        );
        $this->EntriesModel->addJurnal($data);
        redirect("Entries_Controller");
}

public function hapusEntries($id){
  $where = array('idJurnal' => $id);
  $this->EntriesModel->deleteJurnal("entries",$where);
  redirect("Entries_Controller");
}
public function ubahEntries($id){
  $where = array('idJurnal' => $id);
  $data = array(
    "title" => $this->input->post('title'),
    "text" => $this->input->post('deskripsi'),
    "date" => date('Y-m-d H:i:s'),
  );
  $this->EntriesModel->updateJurnal("entries",$data ,$where);
  redirect("Entries_Controller");
}

public function getDataJurnalWhere($id){
    $data['ent'] = $this->EntriesModel->getDataJurnalWheres($id);
    $data['entri'] = $this->EntriesModel->getDataJurnal();
    $this->load->view('entries',$data);
}
/////
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
