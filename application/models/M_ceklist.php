<?php
class M_ceklist extends CI_Model {

   public function get_user($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('id_ceklist', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
    
      $this->db->order_by('id_ceklist','DESC');
      
     
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
    
      return $this->db->get('tb_ceklist as u');
      //echo $this->db->get()->row()->total;
   }


   public function add_ceklist($data)
   {
     $this->db->insert('tb_ceklist',$data);
   }

   public function del_ceklist($id)
   {
     $this->db->where('id_ceklist',$id);
     $this->db->delete('tb_ceklist');
   }

   public function update_ceklist($id,$data)
   {
     $this->db->where('id_ceklist',$id);
     $this->db->update('tb_ceklist',$data);
   }

public function view(){
    return $this->db->get('tb_siswa')->result(); // Tampilkan semua data yang ada di tabel siswa
  }


 }
