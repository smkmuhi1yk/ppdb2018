<?php
class M_kelas extends CI_Model {

   public function get_kelas($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('kode_kelas', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
      
      $this->db->order_by('kode_kelas','DESC');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
      return $this->db->get('tb_kelas as u');
      //echo $this->db->get()->row()->total;
   }


   public function add_kelas($data)
   {
     $this->db->insert('tb_kelas',$data);
   }

   public function del_kelas($id)
   {
     $this->db->where('kode_kelas',$id);
     $this->db->delete('tb_kelas');
   }

   public function update_siswa($id,$data)
   {
     $this->db->where('nis_siswa',$id);
     $this->db->update('tb_siswa',$data);
   }

  /*
  public function cari_kelas()
  {
    $cari = $this->input->GET('cari', TRUE);
    $data = $this->db->query("SELECT * from dborang where Name like '%$cari%' ");
    return $data->result();
  }
*/

 public function cari_kelas($id)
   {
     $cari = $this->input->GET('cari', TRUE);
   $this->db->join('tb_siswa as s','s.nm_kelas = u.kode_kelas');
   $this->db->like('kode_kelas', 'cari', 'both');

   return $this->db->get('tb_kelas as u');
   }


 }
