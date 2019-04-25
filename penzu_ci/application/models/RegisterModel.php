<?php
 
  class RegisterModel extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('akun',$data);
       }
  }