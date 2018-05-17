<?php
class M_siswa extends CI_Model {

   public function get_user($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('no_daftar', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
    
      $this->db->order_by('no_daftar','DESC');
      
     
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
    
      return $this->db->get('tb_siswa as v');
      //echo $this->db->get()->row()->total;
   }

   public function get_join_user($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('no_daftar', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
    
      $this->db->order_by('no_daftar','DESC');
      $this->db->join('wilayah_provinsi as p','p.id= u.id_provinsi_siswa'  );
     $this->db->join('wilayah_kabupaten as k','k.id= u.id_kabupaten_siswa'  );
     $this->db->join('wilayah_kecamatan as c','c.id= u.id_kecamatan_siswa' );
     $this->db->join('wilayah_desa as d','d.id= u.id_desa_siswa'  );

     $this->db->join('wilayah_provinsi_smp as wp','wp.id= u.id_provinsi_smp'  );
     $this->db->join('wilayah_kabupaten_smp as wk','wk.id= u.id_kabupaten_smp'  );
     $this->db->join('wilayah_kecamatan_smp as wc','wc.id= u.id_kecamatan_smp' );
     $this->db->join('wilayah_desa_smp as wd','wd.id= u.id_desa_smp'  );

     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
    
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

   public function add_siswa($data)
   {
     $this->db->insert('tb_siswa',$data);
   }

   public function del_siswa($id)
   {
     $this->db->where('no_daftar',$id);
     $this->db->delete('tb_siswa');
   }

   public function update_siswa($id,$data)
   {
     $this->db->where('no_daftar',$id);
     $this->db->update('tb_siswa',$data);
   }

public function view(){
    return $this->db->get('tb_siswa')->result(); // Tampilkan semua data yang ada di tabel siswa
  }


 }
