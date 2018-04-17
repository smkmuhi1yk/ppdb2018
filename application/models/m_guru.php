<?php
class M_guru extends CI_Model {

   public function get_user($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nbm', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
      
      $this->db->order_by('nbm','DESC');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
      return $this->db->get('tb_guru as u');
      //echo $this->db->get()->row()->total;
   }


   public function add_guru($data)
   {
     $this->db->insert('tb_guru',$data);
   }

   public function del_guru($id)
   {
     $this->db->where('nbm',$id);
     $this->db->delete('tb_guru');
   }

   public function update_siswa($id,$data)
   {
     $this->db->where('nis_siswa',$id);
     $this->db->update('tb_siswa',$data);
   }

  

 }
