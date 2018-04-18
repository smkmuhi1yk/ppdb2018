<?php
class M_Dashboard extends CI_Model {


 public function count_siswa($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

	 public function count_pelanggar($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $rpl = "MM";
      $this->db->where('jurusan',$rpl);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }


   public function count_rpl($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $rpl = "RPL";
      $this->db->where('jurusan',$rpl);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

   public function count_tkj($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $tkj = "TKJ";
      $this->db->where('jurusan',$tkj);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

   public function count_mm($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $mm = "MM";
      $this->db->where('jurusan',$mm);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }


   public function count_ak($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $ak = "AK";
      $this->db->where('jurusan',$ak);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }


   public function count_kms($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $kms = "KMS";
      $this->db->where('keterangan',$kms);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

   public function count_kip($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $kip = "KIP";
      $this->db->where('keterangan',$kip);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

   public function count_pip($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $pip = "PIP";
      $this->db->where('keterangan',$pip);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

    public function count_kps($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
      $this->db->select('*');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      $kps = "KPS";
      $this->db->where('keterangan',$kps);
      return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }


   public function max_nem($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
     // $this->db->select('*');
     // $this->db->order_by('nis_siswa','DESC');
     
    // $this->db->select('nm_siswa');

      //$this->db->select_max('nem');
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
   // $this->db->order_by('no_daftar');
     // $this->db->group_by('nisn');
    return $this->db->query( 'SELECT * FROM tb_siswa WHERE nem = (SELECT MAX(nem) FROM tb_siswa ) ');
     // return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }

public function min_nem($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('nis_siswa', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
   //  $this->db->select('nm_siswa');
     // $this->db->order_by('nis_siswa','DESC');

     // $this->db->select_min('nem'); 
     
     // $this->db->select_sum('poin');
      //$this->db->join('tb_pelanggaran as j', 'j.nis_pelanggaran_siswa = u.nis_siswa');
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
      
     return $this->db->query( 'SELECT * FROM tb_siswa WHERE nem = (SELECT MIN(nem) FROM tb_siswa ) ');
      //return $this->db->get('tb_siswa as u');
      //echo $this->db->get()->row()->total;
   }


 }
