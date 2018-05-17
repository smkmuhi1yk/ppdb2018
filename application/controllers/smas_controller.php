<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smas_controller extends CI_Controller {
  public function __construct(){
	parent::__construct();
  $this->load->library('template');
  $this->load->library('datatables');
  $this->load->model('m_wilayah');
  $this->load->model('m_smp');
}
  public function board()
  {
   // $data['tahun'] = $this->m_tahun->get_tahun()->result_array();

    $data['countsiswa'] = $this->m_dashboard->count_siswa()->result_array();
    $data['countrpl'] = $this->m_dashboard->count_rpl()->result_array();
    $data['counttkj'] = $this->m_dashboard->count_tkj()->result_array();
    $data['countmm'] = $this->m_dashboard->count_mm()->result_array();
    $data['countak'] = $this->m_dashboard->count_ak()->result_array();
    $data['countkms'] = $this->m_dashboard->count_kms()->result_array();
    $data['countpip'] = $this->m_dashboard->count_pip()->result_array();
    $data['countkip'] = $this->m_dashboard->count_kip()->result_array();
     $data['countkps'] = $this->m_dashboard->count_kps()->result_array();
     $data['maxnem'] = $this->m_dashboard->max_nem()->result_array();
      $data['minnem'] = $this->m_dashboard->min_nem()->result_array();

    $this->load->view('board', $data);
  }
	public function index()
	{
    
    $data['tahun'] = $this->m_tahun->get_tahun()->result_array();
		$this->load->view('login',$data);
	}

  public function login()
	{
		$data = array (
		'nip' => $this->input->post('nip',TRUE),
		'password' => md5($this->input->post('password',TRUE)),
	);
	$hasil = $this->m_login->login($data);
	if (count($hasil->result()) == 1) {
		foreach($hasil->result() as $h){
			$h_data['logged_id'] = 'Sudah login';
			$h_data['id_user'] = $h->id_user;
			$h_data['nip'] = $h->nip;
			$h_data['fullname'] = $h->fullname;
			$h_data['email'] = $h->email;
			$h_data['password'] = $h->password;
			$h_data['jabatan'] = $h->jabatan;
      $h_data['alamat'] = $h->alamat;
      $h_data['level'] = $h->level;
      $h_data['id_tahun'] = $this->input->post('id_tahun');
      $h_data['tahun'] = date('Y');
			$this->session->set_userdata($h_data);
		}
    redirect('smas_controller/home');
  }

	else {
    $this->session->set_flashdata('alert','Maaf fullname atau password anda salah');
		redirect('smas_controller/index');
	}
	}


 public function loginsiswa()
  {
    $data = array (
    'nis_siswa' => $this->input->post('nis_siswa',TRUE),
    'password' => md5($this->input->post('password',TRUE)),
  );
  $hasil = $this->m_loginsiswa->loginsiswa($data);
  if (count($hasil->result()) == 1) {
    foreach($hasil->result() as $h){
      $h_data['logged_id'] = 'Sudah login';
      $h_data['nis_siswa'] = $h->nis_siswa;
      $h_data['nama_siswa'] = $h->nama_siswa;
      $h_data['alamat_siswa'] = $h->alamat_siswa;
      $h_data['password'] = $h->password; 
      $h_data['level'] = $h->level;
      $h_data['id_tahun'] = $this->input->post('id_tahun');
      $h_data['tahun'] = date('Y');
      $this->session->set_userdata($h_data);
    }
    redirect('smas_controller/homesiswa');
  }

  else {
    $this->session->set_flashdata('alert','Maaf fullname atau password anda salah');
    redirect('smas_controller/siswa/index');
  }
  }


  public function home()
  {
    $id_tahun = $_SESSION['id_tahun'];
    $id_kategori1 = 1;
    $id_kategori2 = 2;
   // $data['surat_masuk'] = $this->m_dashboard->count_surat($id_kategori1,$id_tahun)->result_array();
    //$data['surat_keluar'] = $this->m_dashboard->count_surat($id_kategori2,$id_tahun)->result_array();
    $data['user'] = $this->m_user->get_user()->result_array();
    $data['countsiswa'] = $this->m_dashboard->count_siswa()->result_array();
    $data['countrpl'] = $this->m_dashboard->count_rpl()->result_array();
    $data['counttkj'] = $this->m_dashboard->count_tkj()->result_array();
    $data['countmm'] = $this->m_dashboard->count_mm()->result_array();
    $data['countak'] = $this->m_dashboard->count_ak()->result_array();
    $data['countkms'] = $this->m_dashboard->count_kms()->result_array();
    $data['countpip'] = $this->m_dashboard->count_pip()->result_array();
    $data['countkip'] = $this->m_dashboard->count_kip()->result_array();
     $data['countkps'] = $this->m_dashboard->count_kps()->result_array();
     $data['maxnem'] = $this->m_dashboard->max_nem()->result_array();
      $data['minnem'] = $this->m_dashboard->min_nem()->result_array();
   // $data['disposisi'] = $this->m_dashboard->count_disposisi($id_tahun)->result_array();
    $this->template->load('index','contents',$data);
  }


  public function chpassword()
  {
    $id = $_SESSION['id_user'];
    $data['password'] = md5($this->input->post('new_password'));
    $hasil = $this->m_user->update_user($id,$data);
   if ($hasil == 0){
      $this->session->set_flashdata('alert','Ganti Password berhasil');
      redirect('smas_controller/home');
    } else {
      $this->session->set_flashdata('alert','Ganti Password Gagal');
      redirect('smas_controller/home');
    }
  }

  public function logout()
	{
		$this->session->userdata('nip');
		$this->session->userdata('level');
    $this->session->userdata('nis_siswa');
    
		session_destroy();
		redirect('smas_controller/index');
	}

  public function user()
  {
    $data['user'] = $this->m_user->get_user()->result_array();
    $data['jabatan'] = $this->m_jabatan->get_jabatan()->result_array();
    $data['level'] = $this->m_level->get_level()->result_array();
    $this->template->load('index','user',$data);
  }


  public function siswa()
  {
    $data['siswa'] = $this->m_siswa->get_user()->result_array();
    $data2['provinsi']=$this->m_wilayah->get_all_provinsi();
    $data2['provinsi_smp']=$this->m_wilayah->get_all_provinsi_smp();

    //$data2['provinsi_smp']=$this->m_wilayah->get_all_provinsi_smp();
    //$data['total_biaya']=$this->m_poin->get_total_biaya()->result();
    //$data['selek'] = $this->m_siswa->selek_poin()->result_array();
   
   // $data['jabatan'] = $this->m_jabatan->get_jabatan()->result_array();
    //$data['level'] = $this->m_level->get_level()->result_array();
    $this->template->load('index','siswa', $data2);
  }

  public function guru()
  {
    $data['guru'] = $this->m_guru->get_user()->result_array();
    //$data['total_biaya']=$this->m_poin->get_total_biaya()->result();
    //$data['selek'] = $this->m_siswa->selek_poin()->result_array();
   
   // $data['jabatan'] = $this->m_jabatan->get_jabatan()->result_array();
    //$data['level'] = $this->m_level->get_level()->result_array();
   $this->template->load('index','guru',$data);
  }

public function addguru()
  {
    $data['nbm'] = $this->input->post('nbm');
    $data['nm_guru'] = $this->input->post('nm_guru');
    $data['level'] = $this->input->post('level');
    $hasil = $this->m_guru->add_guru($data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Input Data User berhasil');
      redirect('smas_controller/guru');
    } else {
      $this->session->set_flashdata('alert','Input Data User Gagal');
      redirect('smas_controller/guru');
    }
  }


  public function kelas()
  {
    $data['kelas'] = $this->m_kelas->get_kelas()->result_array();
    //$data['total_biaya']=$this->m_poin->get_total_biaya()->result();
    //$data['selek'] = $this->m_siswa->selek_poin()->result_array();
   
   // $data['jabatan'] = $this->m_jabatan->get_jabatan()->result_array();
    //$data['level'] = $this->m_level->get_level()->result_array();
   $this->template->load('index','kelas',$data);
  }

public function cari() 
  {
    $data['kelas'] = $this->m_kelas->get_kelas()->result_array();
    $this->load->view('form', $data);
  }
 
  public function hasil()
  {

    $data2['cari'] = $this->m_carikelas->cariOrang();
    $this->load->view('result', $data2);
  }

 public function addkelas()
  {
    $data['kode_kelas'] = $this->input->post('kode_kelas');
    $data['nm_kelas'] = $this->input->post('nm_kelas');
    $hasil = $this->m_kelas->add_kelas($data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Input Data User berhasil');
      redirect('smas_controller/kelas');
    } else {
      $this->session->set_flashdata('alert','Input Data User Gagal');
      redirect('smas_controller/kelas');
    }
  }

  public function delguru()
  {
    $id = $this->uri->segment(3);
    $hasil = $this->m_guru->del_guru($id);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Hapus Data User berhasil');
      redirect('smas_controller/guru');
    } else {
      $this->session->set_flashdata('alert','Hapus Data User Gagal');
      redirect('smas_controller/guru');
    }
  }

public function delkelas()
  {
    $id = $this->uri->segment(3);
    $hasil = $this->m_kelas->del_kelas($id);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Hapus Data User berhasil');
      redirect('smas_controller/kelas');
    } else {
      $this->session->set_flashdata('alert','Hapus Data User Gagal');
      redirect('smas_controller/kelas');
    }
  }


  public function adduser()
  {
    $data['nip'] = $this->input->post('nip');
    $data['fullname'] = $this->input->post('fullname');
    $data['password'] = md5($this->input->post('password'));
    $data['jabatan'] = $this->input->post('jabatan');
    $data['alamat'] = $this->input->post('alamat');
    $data['email'] = $this->input->post('email');
    $data['level'] = $this->input->post('level');
    $hasil = $this->m_user->add_user($data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Input Data User berhasil');
  		redirect('smas_controller/user');
    } else {
      $this->session->set_flashdata('alert','Input Data User Gagal');
      redirect('smas_controller/user');
    }
  }

  

  public function deluser()
  {
    $id = $this->uri->segment(3);
    $hasil = $this->m_user->del_user($id);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Hapus Data User berhasil');
  		redirect('smas_controller/user');
    } else {
      $this->session->set_flashdata('alert','Hapus Data User Gagal');
      redirect('smas_controller/user');
    }
  }

  public function edituser()
  {
    $id = $this->uri->segment(3);
    $data['jabatan'] = $this->m_jabatan->get_jabatan()->result_array();
    $data['level'] = $this->m_level->get_level()->result_array();
    $data['user'] = $this->m_user->get_user($id)->row();
    $this->template->load('index','edit_user',$data);
  }

  public function updateuser()
  {
    $id = $this->input->post('id_user');
    $data['nip'] = $this->input->post('nip');
    $data['fullname'] = $this->input->post('fullname');
    $data['jabatan'] = $this->input->post('jabatan');
    $data['alamat'] = $this->input->post('alamat');
    $data['email'] = $this->input->post('email');
    $data['level'] = $this->input->post('level');
    $hasil = $this->m_user->update_user($id,$data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Update Data User berhasil');
      redirect('smas_controller/user');
    } else {
      $this->session->set_flashdata('alert','Update Data User Gagal');
      redirect('smas_controller/user');
    }
  }

//siswa
  public function addsiswa()
  {
    $data['nm_input'] = $this->input->post('nm_input');
    $data['no_daftar'] = $this->input->post('no_daftar');
    $data['tgl_daftar'] = $this->input->post('tgl_daftar');
    $data['nm_siswa'] = $this->input->post('nm_siswa');
    $data['jk_siswa'] = $this->input->post('jk_siswa');
    $data['nisn'] = $this->input->post('nisn');
    $data['nik_siswa'] = $this->input->post('nik_siswa');
    $data['tempat_lahir'] = $this->input->post('tempat_lahir');
    $data['tgl_lahir'] = $this->input->post('tgl_lahir');
    $data['agama'] = $this->input->post('agama');
    
    $data['nm_ayah'] = $this->input->post('nm_ayah');
    $data['nik_ayah'] = $this->input->post('nik_ayah');
    $data['tahun_ayah'] = $this->input->post('tahun_ayah');
    $data['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
    $data['pendidikan_ayah'] = $this->input->post('pendidikan_ayah');
    $data['gaji_ayah'] = $this->input->post('gaji_ayah');
    
    $data['nm_ibu'] = $this->input->post('nm_ibu');
    $data['nik_ibu'] = $this->input->post('nik_ibu');
    $data['tahun_ibu'] = $this->input->post('tahun_ibu');
    $data['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
    $data['pendidikan_ibu'] = $this->input->post('pendidikan_ibu');
    $data['gaji_ibu'] = $this->input->post('gaji_ibu');
    
    $data['nm_wali'] = $this->input->post('nm_wali');
    $data['nik_wali'] = $this->input->post('nik_wali');
    $data['tahun_wali'] = $this->input->post('tahun_wali');
    $data['pekerjaan_wali'] = $this->input->post('pekerjaan_wali');
    $data['pendidikan_wali'] = $this->input->post('pendidikan_wali');
    $data['gaji_wali'] = $this->input->post('gaji_wali');
    $data['jenis_tinggal'] = $this->input->post('jenis_tinggal');
    
    $data['alamat'] = $this->input->post('alamat');
    $data['rt'] = $this->input->post('rt');
    $data['rw'] = $this->input->post('rw');
    
    $data['id_provinsi_siswa'] = $this->input->post('id_provinsi_siswa');
    $data['id_kabupaten_siswa'] = $this->input->post('id_kabupaten_siswa');
    $data['id_kecamatan_siswa'] = $this->input->post('id_kecamatan_siswa');
    $data['id_desa_siswa'] = $this->input->post('id_desa_siswa');

    //$data['nm_desa'] = $this->input->post('nm_desa');
    //$data['kecamatan'] = $this->input->post('kecamatan');
    //$data['kota'] = $this->input->post('kota');

    $data['kode_pos'] = $this->input->post('kode_pos');
    $data['tinggi_badan'] = $this->input->post('tinggi_badan');
    $data['berat_badan'] = $this->input->post('berat_badan');
    $data['no_telp'] = $this->input->post('no_telp');
    $data['no_hp'] = $this->input->post('no_hp');
    $data['jarak'] = $this->input->post('jarak');
    $data['jml_saudara'] = $this->input->post('jml_saudara');
    $data['jurusan'] = $this->input->post('jurusan');
    $data['email'] = $this->input->post('email');
    
    $data['asal_smp'] = $this->input->post('asal_smp');
    $data['npsn_smp'] = $this->input->post('npsn_smp');
    $data['alamat_smp'] = $this->input->post('alamat_smp');
    $data['id_provinsi_smp'] = $this->input->post('id_provinsi_smp');
    $data['id_kabupaten_smp'] = $this->input->post('id_kabupaten_smp');
    $data['id_kecamatan_smp'] = $this->input->post('id_kecamatan_smp');
    $data['id_desa_smp'] = $this->input->post('id_desa_smp');
    $data['keterangan'] = $this->input->post('keterangan');
    $data['no_kps_kms'] = $this->input->post('no_kps_kms');
    $data['jurusan'] = $this->input->post('jurusan');
    $data['nem'] = $this->input->post('nem');
    $data['c1_kk'] = $this->input->post('c1_kk');
    $data['biaya'] = $this->input->post('biaya');

    $hasil = $this->m_siswa->add_siswa($data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Input Data User berhasil');
      redirect('smas_controller/siswa');
    } else {
      $this->session->set_flashdata('alert','Input Data User Gagal');
      redirect('smas_controller/siswa');
    }
  }

 public function delsiswa()
  {
    $id = $this->uri->segment(3);
    $hasil = $this->m_siswa->del_siswa($id);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Hapus Data User berhasil');
      redirect('smas_controller/calonpelanggar');
    } else {
      $this->session->set_flashdata('alert','Hapus Data User Gagal');
      redirect('smas_controller/calonpelanggar');
    }
  }

  public function editsiswa()
  {
    $id = $this->uri->segment(3);
  
   $data['provinsi']=$this->m_wilayah->get_all_provinsi();
   $data['provinsi_smp']=$this->m_wilayah->get_all_provinsi_smp();
   $data['joinsiswa'] = $this->m_siswa->get_join_user($id)->row();
    $this->template->load('index','edit_siswa',$data);
  }

  public function updatesiswa()
  {
    $data['nm_input'] = $this->input->post('nm_input');
     $id  = $this->input->post('no_daftar');
    $data['tgl_daftar'] = $this->input->post('tgl_daftar');
    $data['nm_siswa'] = $this->input->post('nm_siswa');
    $data['jk_siswa'] = $this->input->post('jk_siswa');
    $data['nisn'] = $this->input->post('nisn');
    $data['nik_siswa'] = $this->input->post('nik_siswa');
    $data['tempat_lahir'] = $this->input->post('tempat_lahir');
    $data['tgl_lahir'] = $this->input->post('tgl_lahir');
    $data['agama'] = $this->input->post('agama');
    
    $data['nm_ayah'] = $this->input->post('nm_ayah');
    $data['nik_ayah'] = $this->input->post('nik_ayah');
    $data['tahun_ayah'] = $this->input->post('tahun_ayah');
    $data['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
    $data['pendidikan_ayah'] = $this->input->post('pendidikan_ayah');
    $data['gaji_ayah'] = $this->input->post('gaji_ayah');
    
    $data['nm_ibu'] = $this->input->post('nm_ibu');
    $data['nik_ibu'] = $this->input->post('nik_ibu');
    $data['tahun_ibu'] = $this->input->post('tahun_ibu');
    $data['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
    $data['pendidikan_ibu'] = $this->input->post('pendidikan_ibu');
    $data['gaji_ibu'] = $this->input->post('gaji_ibu');
    
    $data['nm_wali'] = $this->input->post('nm_wali');
    $data['nik_wali'] = $this->input->post('nik_wali');
    $data['tahun_wali'] = $this->input->post('tahun_wali');
    $data['pekerjaan_wali'] = $this->input->post('pekerjaan_wali');
    $data['pendidikan_wali'] = $this->input->post('pendidikan_wali');
    $data['gaji_wali'] = $this->input->post('gaji_wali');
    $data['jenis_tinggal'] = $this->input->post('jenis_tinggal');
    
    $data['alamat'] = $this->input->post('alamat');
    $data['rt'] = $this->input->post('rt');
    $data['rw'] = $this->input->post('rw');

     $data['id_provinsi_siswa'] = $this->input->post('id_provinsi_siswa');
    $data['id_kabupaten_siswa'] = $this->input->post('id_kabupaten_siswa');
    $data['id_kecamatan_siswa'] = $this->input->post('id_kecamatan_siswa');
    $data['id_desa_siswa'] = $this->input->post('id_desa_siswa');

   // $data['nm_desa'] = $this->input->post('nm_desa');
   // $data['kecamatan'] = $this->input->post('kecamatan');
   // $data['kota'] = $this->input->post('kota');

    $data['kode_pos'] = $this->input->post('kode_pos');
    $data['tinggi_badan'] = $this->input->post('tinggi_badan');
    $data['berat_badan'] = $this->input->post('berat_badan');
    $data['no_telp'] = $this->input->post('no_telp');
    $data['no_hp'] = $this->input->post('no_hp');
    $data['jarak'] = $this->input->post('jarak');
    $data['jml_saudara'] = $this->input->post('jml_saudara');
    $data['jurusan'] = $this->input->post('jurusan');
    $data['email'] = $this->input->post('email');
    
    $data['asal_smp'] = $this->input->post('asal_smp');
    $data['npsn_smp'] = $this->input->post('npsn_smp');
    $data['alamat_smp'] = $this->input->post('alamat_smp');
     $data['id_provinsi_smp'] = $this->input->post('id_provinsi_smp');
    $data['id_kabupaten_smp'] = $this->input->post('id_kabupaten_smp');
    $data['id_kecamatan_smp'] = $this->input->post('id_kecamatan_smp');
    $data['id_desa_smp'] = $this->input->post('id_desa_smp');
    $data['keterangan'] = $this->input->post('keterangan');
    $data['no_kps_kms'] = $this->input->post('no_kps_kms');
    $data['jurusan'] = $this->input->post('jurusan');
    $data['nem'] = $this->input->post('nem');
    $data['c1_kk'] = $this->input->post('c1_kk');
    $data['biaya'] = $this->input->post('biaya');
    $hasil = $this->m_siswa->update_siswa($id,$data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Update Data User berhasil');
      redirect('smas_controller/dt_siswa');
    } else {
      $this->session->set_flashdata('alert','Update Data User Gagal');
      redirect('smas_controller/edit_siswa');
    }
  }

  public function dt_siswa()
  {
    //$data['calonpelanggar'] = $this->m_calon_pelanggar->get_user()->result_array();
    //$data['guru'] = $this->m_guru->get_user()->result_array();
    // $data['kelas'] = $this->m_kelas->get_kelas()->result_array();
   $data['siswa'] = $this->m_siswa->get_user()->result_array();
    //$data['poin_pelanggaran'] = $this->m_pelanggar->poin_pelanggaran()->result_array();
    //$data['level'] = $this->m_level->get_level()->result_array();
    $this->template->load('index','data_siswa',$data);
  }

public function export_siswa()
  {
    //$data['calonpelanggar'] = $this->m_calon_pelanggar->get_user()->result_array();
    //$data['guru'] = $this->m_guru->get_user()->result_array();
    // $data['kelas'] = $this->m_kelas->get_kelas()->result_array();
   $data['joinsiswa'] = $this->m_siswa->get_join_user()->result_array();
    //$data['poin_pelanggaran'] = $this->m_pelanggar->poin_pelanggaran()->result_array();
    //$data['level'] = $this->m_level->get_level()->result_array();
    $this->template->load('index','export_siswa',$data);
  }

 public function addcek()
  {
    $id = $this->uri->segment(3);
   $data['siswa'] = $this->m_siswa->get_user($id)->row();

    $this->template->load('index','add_ceklist',$data);
  }

public function addceklist()
  {
    
    $data['no_daftar'] = $this->input->post('no_daftar');
    $data['nama_cek'] = $this->input->post('nama_cek');
    $data['jurusan'] = $this->input->post('jurusan');
    $data['skhun_asli'] = $this->input->post('skhun_asli');
    $data['fc_skhun'] = $this->input->post('fc_skhun');
    $data['fc_ijazah'] = $this->input->post('fc_ijazah');
    $data['fc_akta'] = $this->input->post('fc_akta');
    $data['fc_c1'] = $this->input->post('fc_c1');
    $data['photo'] = $this->input->post('photo');
    $data['skl_asli'] = $this->input->post('skl_asli');
    $data['fc_kms_kps'] = $this->input->post('fc_kms_kps');
    $data['data_pribadi'] = $this->input->post('data_pribadi');
    $data['fc_raport'] = $this->input->post('fc_raport');
    $data['fc_sertifikat'] = $this->input->post('fc_sertifikat');
    $data['keterangan'] = $this->input->post('keterangan');

    $hasil = $this->m_ceklist->add_ceklist($data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Input Data User berhasil');
      redirect('smas_controller/addcek');
    } else {
      $this->session->set_flashdata('alert','Input Data User Gagal');
      redirect('smas_controller/addcek');
    }
  }

public function dt_ceklist()
  {
    //$data['calonpelanggar'] = $this->m_calon_pelanggar->get_user()->result_array();
    //$data['guru'] = $this->m_guru->get_user()->result_array();
    // $data['kelas'] = $this->m_kelas->get_kelas()->result_array();
   $data['ceklist'] = $this->m_ceklist->get_user()->result_array();
    //$data['poin_pelanggaran'] = $this->m_pelanggar->poin_pelanggaran()->result_array();
    //$data['level'] = $this->m_level->get_level()->result_array();
    $this->template->load('index','data_ceklist',$data);
  }

   public function editceklist()
  {
    $id = $this->uri->segment(3);
    //$data['ceklist'] = $this->m_ceklist->get_user()->result_array();
    $data['ceklist'] = $this->m_ceklist->get_user($id)->row();
    $this->template->load('index','edit_ceklist',$data);
  }

  public function updateceklist()
  {
    $id  = $this->input->post('id_ceklist');

    
   
    $data['nama_cek']   = $this->input->post('nama_cek');
    $data['jurusan']   = $this->input->post('jurusan');
    $data['skhun_asli'] = $this->input->post('skhun_asli');
    $data['fc_skhun'] = $this->input->post('fc_skhun');
    $data['fc_ijazah'] = $this->input->post('fc_ijazah');
    $data['fc_akta'] = $this->input->post('fc_akta');
    $data['fc_c1'] = $this->input->post('fc_c1');
    $data['photo'] = $this->input->post('photo');
    $data['skl_asli'] = $this->input->post('skl_asli');
    $data['fc_kms_kps'] = $this->input->post('fc_kms_kps');
    $data['data_pribadi'] = $this->input->post('data_pribadi');
    $data['fc_raport'] = $this->input->post('fc_raport');
    $data['fc_sertifikat'] = $this->input->post('fc_sertifikat');
    $data['keterangan'] = $this->input->post('keterangan');
    $hasil = $this->m_ceklist->update_ceklist($id,$data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Update Data User berhasil');
      redirect('smas_controller/dt_ceklist');
    } else {
      $this->session->set_flashdata('alert','Update Data User Gagal');
      redirect('smas_controller/ceklist');
    }
  }

  public function delceklist()
  {
    $id = $this->uri->segment(3);
    $hasil = $this->m_ceklist->del_ceklist($id);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Hapus Data User berhasil');
      redirect('smas_controller/dt_ceklist');
    } else {
      $this->session->set_flashdata('alert','Hapus Data User Gagal');
      redirect('smas_controller/calonpelanggar');
    }
  }

 public function daftar_sekolah()
  {
    
    $this->template->load('index' ,'daftar_sekolah');
  }

public function addsmp()
  {
    
    
    $data['nama_sekolah'] = $this->input->post('nama_sekolah');
  

    $hasil = $this->m_smp->add_smp($data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Input Data User berhasil');
      redirect('smas_controller/daftar_sekolah');
    } else {
      $this->session->set_flashdata('alert','Input Data User Gagal');
      redirect('smas_controller/daftar_sekolah');
    }
  }

 public function editsmp()
  {
    $id = $this->uri->segment(3);
    //$data['ceklist'] = $this->m_ceklist->get_user()->result_array();
    $data['daftar_sekolah'] = $this->m_smp->get_user($id)->row();
    $this->template->load('index','edit_sekolah',$data);
  }

public function updatesmp()
  {
    $id  = $this->input->post('id_sekolah');

    $data['nama_sekolah'] = $this->input->post('nama_sekolah');
    $hasil = $this->m_smp->update_sekolah($id,$data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Update Data User berhasil');
      redirect('smas_controller/daftar_sekolah');
    } else {
      $this->session->set_flashdata('alert','Update Data User Gagal');
      redirect('smas_controller/daftar_sekolah');
    }
  }

  public function delsmp()
  {
    $id = $this->uri->segment(3);
    $hasil = $this->m_smp->del_smp($id);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Hapus Data User berhasil');
      redirect('smas_controller/daftar_sekolah');
    } else {
      $this->session->set_flashdata('alert','Hapus Data User Gagal');
      redirect('smas_controller/daftar_sekolah');
    }
  }

  public function tahun()
  {
    $data['tahun'] = $this->m_tahun->get_tahun()->result_array();
    $this->template->load('index','tahun',$data);
  }

  public function addtahun()
  {
    $data['tahun'] = $this->input->post('tahun');
    $data['nama_tahun'] = "Tahun Ajaran " . ($this->input->post('tahun') - 1) . "/" . $this->input->post('tahun');
    $hasil = $this->m_tahun->add_tahun($data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Input Data Tahun berhasil');
  		redirect('smas_controller/tahun');
    } else {
      $this->session->set_flashdata('alert','Input Data Tahun Gagal');
      redirect('smas_controller/tahun');
    }
  }

  public function deltahun()
  {
    $id = $this->uri->segment(3);
    $hasil = $this->m_tahun->del_tahun($id);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Hapus Data Tahun berhasil');
  		redirect('smas_controller/tahun');
    } else {
      $this->session->set_flashdata('alert','Hapus Data Tahun Gagal');
      redirect('smas_controller/tahun');
    }
  }

  public function edittahun()
  {
    $id = $this->uri->segment(3);
    $data['tahun'] = $this->m_tahun->get_tahun($id)->row();
    $this->template->load('index','edit_tahun',$data);
  }

  public function updatetahun()
  {
    $id = $this->input->post('id_tahun');
    $data['tahun'] = $this->input->post('tahun');
    $data['nama_tahun'] = $this->input->post('nama_tahun');
    $hasil = $this->m_tahun->update_tahun($id,$data);
    if ($hasil == 0){
      $this->session->set_flashdata('alert','Update Data Tahun berhasil');
  		redirect('smas_controller/tahun');
    } else {
      $this->session->set_flashdata('alert','Update Data Tahun Gagal');
      redirect('smas_controller/tahun');
    }
  }

  //Ambil data provinsi
function add_ajax_kab($id_prov){
      $query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
      $data = "<option value=''>- Select Kabupaten -</option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->nama_kabupaten."</option>";
      }
      echo $data;
  }
  
  function add_ajax_kec($id_kab){
      $query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
      $data = "<option value=''> - Pilih Kecamatan - </option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->nama_kecamatan."</option>";
      }
      echo $data;
  }
  
  function add_ajax_des($id_kec){
      $query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
      $data = "<option value=''> - Pilih Desa - </option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->nama_desa."</option>";
      }
      echo $data;
  }
  

//Ambil data smp
function add_ajax_kab_smp($id_prov){
      $query = $this->db->get_where('wilayah_kabupaten_smp',array('provinsi_id'=>$id_prov));
      $data = "<option value=''>- Select Kabupaten -</option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->nama_kabupaten_smp."</option>";
      }
      echo $data;
  }
  
  function add_ajax_kec_smp($id_kab){
      $query = $this->db->get_where('wilayah_kecamatan_smp',array('kabupaten_id'=>$id_kab));
      $data = "<option value=''> - Pilih Kecamatan - </option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->nama_kecamatan_smp."</option>";
      }
      echo $data;
  }
  
  function add_ajax_des_smp($id_kec){
      $query = $this->db->get_where('wilayah_desa_smp',array('kecamatan_id'=>$id_kec));
      $data = "<option value=''> - Pilih Desa - </option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->nama_desa_smp."</option>";
      }
      echo $data;
  }



}
