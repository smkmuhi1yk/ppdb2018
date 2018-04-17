<?php
class M_detailpelanggar extends CI_Model {

   public function get_user($id=NULL)
   {
     if ($id==NULL){
 
     } else {
      

      $this->db->where('nis_pelanggaran_siswa' ,$id);
     }
   //  $this->db->order_by('id_pelanggaran','DESC');
 
     // $idpengguna = $this->session->userdata('nis_siswa');
      $this->db->join('tb_siswa as l','l.nis_siswa= u.nis_pelanggaran_siswa' );
      
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $this->db->where('nis_pelanggaran_siswa', $id);

     return $this->db->get('tb_pelanggaran as u');
   }
   public function add_pelanggar($data)
   {
     $this->db->insert('tb_pelanggaran',$data);
   }

   public function del_pelanggar($id)
   {
     $this->db->where('id_pelanggaran',$id);
     $this->db->delete('tb_pelanggaran');
   }

   public function update_pelanggar($id,$data)
   {
     $this->db->where('id_pelanggaran',$id);
     $this->db->update('tb_pelanggaran',$data);
   }
public function get_pelanggar($id)
 {
    $this->db->where('nis_pelanggaran_siswa',$id);
   $this->db->join('tb_siswa as l','l.nis_siswa= u.nis_pelanggaran_siswa');
  
   return $this->db->get('tb_pelanggaran as u');
 }
 }
