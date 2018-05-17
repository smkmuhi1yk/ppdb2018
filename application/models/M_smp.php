<?php
class M_smp extends CI_Model {

   public function get_user($id=NULL)
   {
     if ($id==NULL){

     } else {
      $this->db->where('id_sekolah', $id);
     // $this->db->group_by('nis_siswa', $id);
     }
     
    
      $this->db->order_by('id_sekolah','DESC');
      
     
     //$this->db->select_sum('poin');
     // $this->db->where('nis_siswa', $id);
    
      return $this->db->get('tb_sekolah as u');
      //echo $this->db->get()->row()->total;
   }


   public function add_smp($data)
   {
     $this->db->insert('tb_sekolah',$data);
   }

   public function del_smp($id)
   {
     $this->db->where('id_sekolah',$id);
     $this->db->delete('tb_sekolah');
   }

   public function update_sekolah($id,$data)
   {
     $this->db->where('id_sekolah',$id);
     $this->db->update('tb_sekolah',$data);
   }

public function view(){
    return $this->db->get('tb_siswa')->result(); // Tampilkan semua data yang ada di tabel siswa
  }

function json() {
        $this->datatables->select('*');
        $this->datatables->from('tb_sekolah');
        //$this->datatables->join('country', 'city.CountryCode = country.Code');
        $this->datatables->add_column('view', '<a href="editsmp/$1">edit</a> | <a href="delsmp/$1">delete</a>', 'id_sekolah');
        return $this->datatables->generate();
    }
 }
