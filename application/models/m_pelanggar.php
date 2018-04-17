<?php
class M_pelanggar extends CI_Model {

   public function get_user($id=NULL)
   {
     if ($id==NULL){
 
     } else {
      $this->db->where('id_pelanggaran',$id);
     }
     $this->db->order_by('id_pelanggaran','DESC');
    $this->db->join('tb_siswa as l','l.nis_siswa= u.nis_pelanggaran_siswa' );
    // $this->db->join('tb_jabatan as j','j.id_jabatan = u.jabatan');

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
 public function jmlpoin($id)
{
   $this->db->select_sum('poin');
   $this->db->group_by('nis_pelanggaran_siswa');
}

 }
