<?php

  class EntriesModel extends CI_Model{

       public function addJurnal($data)
       {
            $this->db->insert('entries',$data);
       }
       function getDataJurnal(){
          return $this->db->get("entries")->result();
      	}
       // public function EditJurnal($data, $where)
       // {
       //      $this->db->where($where)
       //      // $this->db->update('entries',$data);
       // }
       public function deleteJurnal($table, $where){
      		$this->db->delete($table,$where);
	     }

       public function updateJurnal($table, $data, $where){
         $this->db->update($table, $data ,$where); 
       }


       public function getDataJurnalWheres($where){
         $this->db->select("idJurnal,title,text,date");
         $this->db->from("entries");
         $this->db->where("idJurnal",$where);
         $query = $this->db->get();
         if($query->num_rows() != 0){
           return $query->result();
         }else{
           return false;
         }
       }
  }
