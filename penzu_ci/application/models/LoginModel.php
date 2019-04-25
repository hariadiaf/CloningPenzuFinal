<?php

class LoginModel extends CI_Model {
    
    public function getUserLogin($email,$password){
        $query = $this->db->get_where("Akun",['email'=>$email,'password'=>$password]);
        $data = $query->row();
        $this->session->set_userdata("email",$email);
        $this->session->set_userdata("id",$data->id_user);
        return $query->row_array();
    }
    
}