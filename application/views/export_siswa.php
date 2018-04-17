<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>
<section class="content-header">
 

  <h1>
    Master
    <small>Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Master Data</li>
    <li class="active">Data Siswa</li>
  </ol>
  
</section>
<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header with-border">
            
             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body" style="overflow-x: auto;">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Input Data</th>
                 <th>No Daftar</th>
                 <th>Tanggal Daftar</th>
                 <th>Nama Siswa</th>
                 <th>JK</th>
                 <th>NISN</th>
                 <th>NIK Siswa</th>
                 <th>Tempat Lahir</th>
                 <th>TGL Lahir</th>
                 <th>Agama</th>

                 <th>Nama Ayah</th>
                 <th>NIK Ayah</th>
                 <th>Tahun Lahir Ayah</th>
                 <th>Pekerjaan Ayah</th>
                 <th>Pendidikan Ayah</th>
                 <th>Gaji Ayah</th>

                 <th>Nama Ibu</th>
                 <th>NIK Ibu</th>
                 <th>Tahun Lahir Ibu</th>
                 <th>Pekerjaan Ibu</th>
                 <th>Pendidikan Ibu</th>
                 <th>Gaji Ibu</th>

                 <th>Nama Wali</th>
                 <th>NIK Wali</th>
                 <th>Tahun Lahir Wali</th>
                 <th>Pekerjaan Wali</th>
                 <th>Pendidikan Wali</th>
                 <th>Gaji Wali</th>

                 <th>Jenis Tinggal</th>
                 <th>Alamat</th>
                 <th>RT</th>
                 <th>RW</th>
                 <th>Nama Desa</th>
                 <th>Kecamatan</th>
                 <th>Kota</th>
                 <th>Kode Pos</th>
                 <th>Tinggi Badan</th>
                 <th>Berat Badan</th>
                 <th>No. Telp</th>
                 <th>No. HP</th>
                 <th>Jarak</th>
                 <th>Jumlah Saudara</th>
                 <th>Email</th>
                 <th>Asal SMP</th>
                 <th>NPSN SMP</th>
                 <th>Alamat SMP</th>
                 <th>Desa SMP</th>
                 <th>Kecamatan SMP</th>
                 <th>Kab. SMP</th>
                 <th>Prov. SMP</th>
                 <th>Keterangan</th>
                 <th>No. KPS/KMS</th>
                 <th>Jurusan</th>
                 <th>NEM</th>
                 <th>C1/KK</th>
                 <th>Biaya Lunas/Belum</th>             
               </tr>
               </thead>
               <tbody>
              <?php  $no = 1;
                      foreach ($siswa as $u) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u['nm_input'];?></td>
                 <td><?php echo $u['no_daftar'];?></td>
                  <td><?php echo $u['tgl_daftar'];?></td>
                  <td><?php echo $u['nm_siswa'];?></td>
                  <td><?php echo $u['jk_siswa'];?></td>
                  <td><?php echo $u['nisn'];?></td>
                  <td><?php echo $u['nik_siswa'];?></td>
                  <td><?php echo $u['tempat_lahir'];?></td>
                  <td><?php echo $u['tgl_lahir'];?></td>
                  <td><?php echo $u['agama'];?></td>

                  <td><?php echo $u['nm_ayah'];?></td>
                  <td><?php echo $u['nik_ayah'];?></td>
                  <td><?php echo $u['tahun_ayah'];?></td>
                  <td><?php echo $u['pekerjaan_ayah'];?></td>
                  <td><?php echo $u['pendidikan_ayah'];?></td>
                  <td><?php echo $u['gaji_ayah'];?></td>
                  
                  <td><?php echo $u['nm_ibu'];?></td>
                  <td><?php echo $u['nik_ibu'];?></td>
                  <td><?php echo $u['tahun_ibu'];?></td>
                  <td><?php echo $u['pekerjaan_ibu'];?></td>
                  <td><?php echo $u['pendidikan_ibu'];?></td>
                  <td><?php echo $u['gaji_ibu'];?></td>

                  <td><?php echo $u['nm_wali'];?></td>
                  <td><?php echo $u['nik_wali'];?></td>
                  <td><?php echo $u['tahun_wali'];?></td>
                  <td><?php echo $u['pekerjaan_wali'];?></td>
                  <td><?php echo $u['pendidikan_wali'];?></td>
                  <td><?php echo $u['gaji_wali'];?></td>                  
                  <td><?php echo $u['jenis_tinggal'];?></td>
                  <td><?php echo $u['alamat'];?></td>
                 <td><?php echo $u['rt'];?></td>
                  <td><?php echo $u['rw'];?></td>
                  <td><?php echo $u['nm_desa'];?></td>
                  <td><?php echo $u['kecamatan'];?></td>
                  <td><?php echo $u['kota'];?></td>
                  <td><?php echo $u['kode_pos'];?></td>
                  <td><?php echo $u['tinggi_badan'];?></td>
                  <td><?php echo $u['berat_badan'];?></td>
                  <td><?php echo $u['no_telp'];?></td>
                 <td><?php echo $u['no_hp'];?></td>
                  <td><?php echo $u['jarak'];?></td>
                  <td><?php echo $u['jml_saudara'];?></td>
                  <td><?php echo $u['email'];?></td>
                  <td><?php echo $u['asal_smp'];?></td>
                  <td><?php echo $u['npsn_smp'];?></td>
                  <td><?php echo $u['alamat_smp'];?></td>
                  <td><?php echo $u['desa_smp'];?></td>
                  
                 <td><?php echo $u['kecamatan_smp'];?></td>
                  <td><?php echo $u['kab_smp'];?></td>
                 <td><?php echo $u['provinsi_smp'];?></td>
                  <td><?php echo $u['keterangan'];?></td>
                  <td><?php echo $u['no_kps_kms'];?></td>
                  <td><?php echo $u['jurusan'];?></td>
                  <td><?php echo $u['nem'];?></td>
                  <td><?php echo $u['c1_kk'];?></td>
                  <td><?php echo $u['biaya'];?></td>
                 
                </tr>
              <?php   } ?>
               </tbody>
               <tfoot>
               <tr>
                 <th>No</th>
                 <th>Input Data</th>
                 <th>No Daftar</th>
                 <th>Tanggal Daftar</th>
                 <th>Nama Siswa</th>
                 <th>JK</th>
                 <th>NISN</th>
                 <th>NIK Siswa</th>
                 <th>Tempat Lahir</th>
                 <th>TGL Lahir</th>
                 <th>Agama</th>

                 <th>Nama Ayah</th>
                 <th>NIK Ayah</th>
                 <th>Tahun Lahir Ayah</th>
                 <th>Pekerjaan Ayah</th>
                 <th>Pendidikan Ayah</th>
                 <th>Gaji Ayah</th>

                 <th>Nama Ibu</th>
                 <th>NIK Ibu</th>
                 <th>Tahun Lahir Ibu</th>
                 <th>Pekerjaan Ibu</th>
                 <th>Pendidikan Ibu</th>
                 <th>Gaji Ibu</th>

                 <th>Nama Wali</th>
                 <th>NIK Wali</th>
                 <th>Tahun Lahir Wali</th>
                 <th>Pekerjaan Wali</th>
                 <th>Pendidikan Wali</th>
                 <th>Gaji Wali</th>

                 <th>Jenis Tinggal</th>
                 <th>Alamat</th>
                 <th>RT</th>
                 <th>RW</th>
                 <th>Nama Desa</th>
                 <th>Kecamatan</th>
                 <th>Kota</th>
                 <th>Kode Pos</th>
                 <th>Tinggi Badan</th>
                 <th>Berat Badan</th>
                 <th>No. Telp</th>
                 <th>No. HP</th>
                 <th>Jarak</th>
                 <th>Jumlah Saudara</th>
                 <th>Email</th>
                 <th>Asal SMP</th>
                 <th>NPSN SMP</th>
                 <th>Alamat SMP</th>
                 <th>Desa SMP</th>
                 <th>Kecamatan SMP</th>
                 <th>Kab. SMP</th>
                 <th>Prov. SMP</th>
                 <th>Keterangan</th>
                 <th>No. KPS/KMS</th>
                 <th>Jurusan</th>
                 <th>NEM</th>
                 <th>C1/KK</th>
                 <th>Biaya Lunas/Belum</th>     
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>

 <div class="modal fade" id="tambah_user" role="dialog">
        <div class="modal-dialog modal-md">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data User</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_urL('index.php/smas_controller/addsiswa');?>" role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Masukan NISN</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="nis_siswa" class="form-control" placeholder="Enter NISN" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Masukan fullname</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nama_siswa" class="form-control" placeholder="Masukan Nama Lengkap" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Masukan Password</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="jk_siswa" required>
                         <option value="L">Laki - laki </option>
                         <option value="P">Perempuan </option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Masukan Alamat</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <textarea name="alamat_siswa" class="form-control" rows="3" placeholder="Masukan Alamat" required></textarea>
                   </div>
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="hp_siswa" class="form-control" placeholder="No HP" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Nama Ayah</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_ayah" class="form-control" placeholder="Nama Ayah" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Nama Ibu</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_ibu" class="form-control" placeholder="Nama Ibu" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="kelas" required>
                         <option value="X">Kelas X </option>
                         <option value="XI">Kelas XI </option>
                         <option value="XII">Kelas XII </option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="jurusan" required>
                         <option value="RPL">Rekayasa Perangkat Lunak</option>
                         <option value="TKJ">Teknik Komputer dan Jaringan</option>
                         <option value="MM">Multimedia</option>
                         <option value="AK">Akuntansi</option>
                      </select>
                   </div>
                </div>
               <div class="form-group">
              <label>Nama Kelas</label>
              <div class="input-group">
              <span class="input-group-addon">+</span>
               <select class="js-example-placeholder-single js-states form-control" style="width: 100%;" name="kode_kelas" >
                 <?php foreach ($kelas as $k) { ?>
                    <option value="<?php echo $k['kode_kelas'];?>"><?php echo $k['nm_kelas'];?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
          

              <div class="form-group">
              <label>Wali Kelas</label>
              <div class="input-group">
              <span class="input-group-addon">+</span>
               <select class="js-example-placeholder-single js-states form-control" style="width: 100%;" name="nbm_guru" >
                 <?php foreach ($guru as $d) { ?>
                    <option value="<?php echo $d['nbm'];?>"><?php echo $d['nm_guru'];?></option>
                 <?php } ?>
               </select>
             </div>
           </div>

              <!-- /.box-body

  <div class="form-group">
                <label>Wali Kelas</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                    <select name="nbm_guru" class="js-example-placeholder-single js-states form-control" style="width: 100%;">
                         <option value=""></option>
                         <option value="Joko Supriyanto">Joko Supriyanto</option>
                         <option value="Aditia Nurjaman">Aditia Nurjaman</option>
                         <option value="Eko Purnomo">Eko Purnomo</option>
                         <option value="Gani">Ganis</option>
                    </select>
                </div>
                </div>

              -->

              <div class="box-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right">Add Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>

