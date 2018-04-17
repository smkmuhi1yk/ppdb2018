<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Filter_kelas extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_filter_kelas','tb_siswa');
    }
 
    public function index()
    {
      
         
        $countries = $this->tb_siswa->get_list_countries();
 
        $opt = array('' => 'All Country');
        foreach ($countries as $country) {
            $opt[$country] = $country;
        }
 
        $data['form_country'] = form_dropdown('',$opt,'','id="nis_siswa" class="form-control"');
        $this->load->view('filter_kelas', $data);
    }
 
    public function ajax_list()
    {

        $list = $this->tb_siswa->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $tb_siswa) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $tb_siswa->nis_siswa;
            $row[] = $tb_siswa->nama_siswa;
            $row[] = $tb_siswa->jk_siswa;
            $row[] = $tb_siswa->kelas;
            $row[] = $tb_siswa->jurusan;
            $row[] = $tb_siswa->nm_kelas;
           
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->tb_siswa->count_all(),
                        "recordsFiltered" => $this->tb_siswa->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
}