<?php
class M_loginsiswa extends CI_Model {
public function loginsiswa($data)
 {
   $this->db->where('nis_siswa',$data['nis_siswa']);
   $this->db->where('password',$data['password']);
   return $this->db->get('tb_siswa');
 }

 }
