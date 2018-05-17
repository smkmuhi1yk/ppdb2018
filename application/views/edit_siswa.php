<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>
<section class="content-header">
  <h1>
    Biodata
    <small>Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Biodata</li>
    <li class="active">Data Siswa</li>
  </ol>
</section>
<section class="content">
 <form action="<?php echo base_urL('index.php/smas_controller/updatesiswa');?>" role="form" method="post">
  <div class="row">
  <div class="col-md-6">
        <!--panel-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Siswa</h3>
        </div><!--panel heading-->
          <div class="panel-body">
            <div class="form-group">
                  <label>Nama Penginput Data</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_input" class="form-control" placeholder="Nama Penginput Data" value="<?php echo $_SESSION['fullname'];?>" readonly required>
                   </div>
                </div>
             <div class="form-group">
                  <label>No Daftar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="no_daftar" class="form-control" placeholder="No Daftar" value="<?php echo $joinsiswa->no_daftar;?>" readonly required>
                   </div>
                </div>
                <div class="form-group">
                <label>Tanggal Daftar</label>
               <div id="datepicker3" class="input-group date" data-date-format="mm-dd-yyyy">
                  <input name="tgl_daftar" class="form-control" type="text" value="<?php echo $joinsiswa->tgl_daftar;?>" readonly />
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              </div>
              </div>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <p style="color:red;">*)sesuaikan ijazah</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_siswa" class="form-control" placeholder="Nama Lengkap Siswa" value="<?php echo $joinsiswa->nm_siswa;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="jk_siswa" required>
                     <option value="<?php echo $joinsiswa->jk_siswa;?>"><?php echo $joinsiswa->jk_siswa;?></option>
                         <option value="L">L</option>
                         <option value="P">P</option>
                     </select>
                   </div>
                </div>
               <div class="form-group">
                  <label>NISN</label>
                  <p style="color:red;">*)sesuaikan ijazah</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nisn" class="form-control" placeholder="NISN" value="<?php echo $joinsiswa->nisn;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>NIK Siswa</label>
                  <p style="color:red;">*)Nomor NIK KTP / C1 / KK sesuai nama Siswa</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="nik_siswa" class="form-control" placeholder="NIK Siswa" value="<?php echo $joinsiswa->nik_siswa;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <p style="color:red;">*)sesuaikan ijazah</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $joinsiswa->tempat_lahir;?>" required>
                   </div>
                </div>
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <p style="color:red;">*)sesuaikan ijazah</p>
               <div id="datepicker4" class="input-group date" data-date-format="mm-dd-yyyy">
                  <input name="tgl_lahir" class="form-control" type="text" value="<?php echo $joinsiswa->tgl_lahir;?>" readonly />
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              </div>
              </div>
              <div class="form-group">
                  <label>Agama</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="agama" required>
                         <option value="Islam">Islam</option>
                     </select>
                   </div>
                </div>
          </div><!--body-->
        </div><!--panel default-->
        <!--panel-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Ayah</h3>
        </div><!--panel heading-->
          <div class="panel-body">
             <div class="form-group">
                  <label>Nama Ayah</label>
                  <p style="color:red;">*)sesuaikan ijazah SMP Siswa</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_ayah" class="form-control" placeholder="Nama Lengkap Ayah" value="<?php echo $joinsiswa->nm_ayah;?>" required>
                   </div>
                </div>
              <div class="form-group">
                  <label>NIK Ayah</label>
                  <p style="color:red;">*)Nomor NIK KTP</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="nik_ayah" class="form-control" placeholder="NIK Ayah" value="<?php echo $joinsiswa->nik_ayah;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Tahun Lahir Ayah</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="tahun_ayah" class="form-control" placeholder="Tahun Lahir Ayah" value="<?php echo $joinsiswa->tahun_ayah;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Pekerjaan Ayah</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="pekerjaan_ayah" required>
                      <option value="<?php echo $joinsiswa->pekerjaan_ayah;?>"><?php echo $joinsiswa->pekerjaan_ayah;?></option>
                         <option value="Tidak Bekerja">Tidak Bekerja</option>
                         <option value="Nelayan">Nelayan</option>
                         <option value="Petani">Petani</option>
                         <option value="Peternak">Peternak</option>
                         <option value="PNS">PNS/TNI/Polri</option>
                         <option value="Karyawan Swasta">Karyawan Swasta</option>
                         <option value="Pedagang Kecil">Pedagang Kecil</option>
                         <option value="Pedagang Besar">Pedagang Besar</option>
                         <option value="Wiraswasta">Wiraswasta</option>
                         <option value="Wirausaha">Wirausaha</option>
                         <option value="Buruh">Buruh</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Pendidikan Ayah</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="pendidikan_ayah" required>
                      <option value="<?php echo $joinsiswa->pendidikan_ayah;?>"><?php echo $joinsiswa->pendidikan_ayah;?></option>
                         <option value="Tidak Sekolah">Tidak Sekolah</option>
                         <option value="Putus SD">Putus SD</option>
                         <option value="SD">SD</option>
                         <option value="SMP">SMP</option>
                         <option value="SMA">SMA</option>
                         <option value="D1">D1</option>
                         <option value="D2">D2</option>
                         <option value="D3">D3</option>
                         <option value="S1/D4">S1/D4</option>
                         <option value="S2">S2</option>
                         <option value="S3">S3</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Gaji Ayah</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="gaji_ayah" required>
                         <option value="<?php echo $joinsiswa->gaji_ayah;?>"><?php echo $joinsiswa->gaji_ayah;?></option>
                         <option value="Kurang dari 500,000">Kurang dari 500, 000</option>
                         <option value="500,000 - 999,999">500,000 - 999,999</option>
                         <option value="1 juta - 1,999,999">1 juta - 1,999,999</option>
                         <option value="2 Juta - 4,999,999">2 Juta - 4,999,999</option>
                         <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                         <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                         <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                     </select>
                   </div>
                </div>

          </div><!--body-->
        </div><!--panel default-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Ibu</h3>
        </div><!--panel heading-->
          <div class="panel-body">
              <div class="form-group">
                  <label>Nama Ibu</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_ibu" class="form-control" placeholder="Nama Lengkap Ibu" value="<?php echo $joinsiswa->nm_ibu;?>" required>
                   </div>
                </div>
              <div class="form-group">
                  <label>NIK Ibu</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="nik_ibu" class="form-control" placeholder="NIK Ibu" value="<?php echo $joinsiswa->nik_ibu;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Tahun Lahir Ibu</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="tahun_ibu" class="form-control" placeholder="Tahun Lahir Ibu" value="<?php echo $joinsiswa->tahun_ibu;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Pekerjaan Ibu</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="pekerjaan_ibu" required>
                      <option value="<?php echo $joinsiswa->pekerjaan_ibu;?>"><?php echo $joinsiswa->pekerjaan_ibu;?></option>
                         <option value="Tidak Bekerja">Tidak Bekerja</option>
                         <option value="Nelayan">Nelayan</option>
                         <option value="Petani">Petani</option>
                         <option value="Peternak">Peternak</option>
                         <option value="PNS">PNS/TNI/Polri</option>
                         <option value="Karyawan Swasta">Karyawan Swasta</option>
                         <option value="Pedagang Kecil">Pedagang Kecil</option>
                         <option value="Pedagang Besar">Pedagang Besar</option>
                         <option value="Wiraswasta">Wiraswasta</option>
                         <option value="Wirausaha">Wirausaha</option>
                         <option value="Buruh">Buruh</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Pendidikan Ibu</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="pendidikan_ibu" required>
                      <option value="<?php echo $joinsiswa->pendidikan_ibu;?>"><?php echo $joinsiswa->pendidikan_ibu;?></option>
                         <option value="Tidak Sekolah">Tidak Sekolah</option>
                         <option value="Putus SD">Putus SD</option>
                         <option value="SD">SD</option>
                         <option value="SMP">SMP</option>
                         <option value="SMA">SMA</option>
                         <option value="D1">D1</option>
                         <option value="D2">D2</option>
                         <option value="D3">D3</option>
                         <option value="S1/D4">S1/D4</option>
                         <option value="S2">S2</option>
                         <option value="S3">S3</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Gaji Ibu</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="gaji_ibu" required>
                      <option value="<?php echo $joinsiswa->gaji_ibu;?>"><?php echo $joinsiswa->gaji_ibu;?></option>
                          <option value="Kurang dari 500,000">Kurang dari 500, 000</option>
                         <option value="500,000 - 999,999">500,000 - 999,999</option>
                         <option value="1 juta - 1,999,999">1 juta - 1,999,999</option>
                         <option value="2 Juta - 4,999,999">2 Juta - 4,999,999</option>
                         <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                         <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                         <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                     </select>
                   </div>
                </div>

          </div><!--body-->
        </div><!--panel default-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Wali</h3>
        </div><!--panel heading-->
          <div class="panel-body">
              <div class="form-group">
                  <label>Nama Wali</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_wali" class="form-control" placeholder="Nama Lengkap Wali" value="<?php echo $joinsiswa->nm_wali;?>" required>
                   </div>
                </div>
              <div class="form-group">
                  <label>NIK Wali</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="nik_wali" class="form-control" placeholder="NIK Wali" value="<?php echo $joinsiswa->nik_wali;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Tahun Lahir Wali</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="tahun_wali" class="form-control" placeholder="Tahun Lahir Wali" value="<?php echo $joinsiswa->tahun_wali;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Pekerjaan Wali</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="pekerjaan_wali" required>
                      <option value="<?php echo $joinsiswa->pekerjaan_wali;?>"><?php echo $joinsiswa->pekerjaan_wali;?></option>
                         <option value="Tidak Bekerja">Tidak Bekerja</option>
                         <option value="Nelayan">Nelayan</option>
                         <option value="Petani">Petani</option>
                         <option value="Peternak">Peternak</option>
                         <option value="PNS">PNS/TNI/Polri</option>
                         <option value="Karyawan Swasta">Karyawan Swasta</option>
                         <option value="Pedagang Kecil">Pedagang Kecil</option>
                         <option value="Pedagang Besar">Pedagang Besar</option>
                         <option value="Wiraswasta">Wiraswasta</option>
                         <option value="Wirausaha">Wirausaha</option>
                         <option value="Buruh">Buruh</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Pendidikan Wali</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="pendidikan_wali" required>
                          <option value="<?php echo $joinsiswa->pendidikan_wali;?>"><?php echo $joinsiswa->pendidikan_wali;?></option>
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                         <option value="Putus SD">Putus SD</option>
                         <option value="SD">SD</option>
                         <option value="SMP">SMP</option>
                         <option value="SMA">SMA</option>
                         <option value="D1">D1</option>
                         <option value="D2">D2</option>
                         <option value="D3">D3</option>
                         <option value="S1/D4">S1/D4</option>
                         <option value="S2">S2</option>
                         <option value="S3">S3</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Gaji Wali</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="gaji_wali" required>
                      <option value="<?php echo $joinsiswa->gaji_wali;?>"><?php echo $joinsiswa->gaji_wali;?></option>
                        <option value="Kurang dari 500,000">Kurang dari 500, 000</option>
                         <option value="500,000 - 999,999">500,000 - 999,999</option>
                         <option value="1 juta - 1,999,999">1 juta - 1,999,999</option>
                         <option value="2 Juta - 4,999,999">2 Juta - 4,999,999</option>
                         <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                         <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                         <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                     </select>
                   </div>
                </div>

          </div><!--body-->
        </div><!--panel default-->
  </div><!--kolom 1-->
  <div class="col-md-6">
        <!--panel 2-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Alamat</h3>
        </div><!--panel heading-->
          <div class="panel-body">
              <div class="form-group">
                  <label>Jenis Tinggal</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="jenis_tinggal" required>
                          <option value="<?php echo $joinsiswa->jenis_tinggal;?>"><?php echo $joinsiswa->jenis_tinggal;?></option>
                         <option value="Wali">Wali</option>
                         <option value="Kos">Kos</option>
                         <option value="Asrama">Asmrama</option>
                         <option value="Panti Asuhan">Panti Asuhan</option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                   </div>
                </div>
              <div class="form-group">
                  <label>Alamat</label>
                  <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="alamat" class="form-control" placeholder="Alamat Siswa" value="<?php echo $joinsiswa->alamat;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>RT</label>
                  <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="rt" class="form-control" placeholder="RT" value="<?php echo $joinsiswa->rt;?>"required>
                   </div>
                </div>
                <div class="form-group">
                  <label>RW</label>
                  <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="rw" class="form-control" placeholder="RW" value="<?php echo $joinsiswa->rw;?>" required>
                   </div>
                </div>

                <div class="form-group">
                <label>Provinsi</label>
                <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
                <div class="input-group">
                <span class="input-group-addon">+</span>
                <select name="id_provinsi_siswa" class="form-control" id="provinsi">
                <option value="<?php echo $joinsiswa->id_provinsi_siswa;?>"><?php echo $joinsiswa->nama_provinsi;?> </option>
                <?php foreach($provinsi as $prov){
                 echo '<option value="'.$prov->id.'">'.$prov->nama_provinsi.'</option>';
                } ?>
                </select>
                  </div>
                </div>
              <div class="form-group">
                <label>Kabupaten</label>
                <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
                <div class="input-group">
                <span class="input-group-addon">+</span>
              <select name="id_kabupaten_siswa" class="form-control" id="kabupaten">
              <option value='<?php echo $joinsiswa->id_kabupaten_siswa;?>'><?php echo $joinsiswa->nama_kabupaten;?></option>
              </select>
               </div>
                </div>
             <div class="form-group">
             <label>Kecamatan</label>
             <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
            <div class="input-group">
            <span class="input-group-addon">+</span>
              <select name="id_kecamatan_siswa" class="form-control" id="kecamatan">
              <option value="<?php echo $joinsiswa->id_kecamatan_siswa;?>"><?php echo $joinsiswa->nama_kecamatan;?></option>
              </select>
               </div>
                </div>
            <div class="form-group">
            <label>Desa</label>
            <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
            <div class="input-group">
            <span class="input-group-addon">+</span>
              <select name="id_desa_siswa" class="form-control" id="desa">
              <option value="<?php echo $joinsiswa->id_desa_siswa;?>"><?php echo $joinsiswa->nama_desa;?></option>
              </select>
               </div>
                </div>
                <!--
                <div class="form-group">
                  <label>Nama Desa</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_desa" class="form-control" placeholder="Nama Desa" value="<?php echo $joinsiswa->nm_desa;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo $joinsiswa->kecamatan;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo $joinsiswa->kota;?>" required>
                   </div>
                </div>
              -->
                <div class="form-group">
                  <label>Kode Pos</label>
                  <p style="color:red;">Sesuaikan Domisili / Tempat tinggal sekarang</p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="kode_pos" class="form-control" placeholder="Kode Pos" value="<?php echo $joinsiswa->kode_pos;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>Tinggi Badan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan" value="<?php echo $joinsiswa->tinggi_badan;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>Berat Badan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan" value="<?php echo $joinsiswa->berat_badan;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>No. Telpon</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="no_telp" class="form-control" placeholder="No Telpon" value="<?php echo $joinsiswa->no_telp;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>No. HP</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="no_hp" class="form-control" placeholder="No Telpon" value="<?php echo $joinsiswa->no_hp;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>Jarak</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="jarak" class="form-control" placeholder="Jarak KM" value="<?php echo $joinsiswa->jarak;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>Jumlah Saudara</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="jml_saudara" class="form-control" placeholder="Jumlah Saudara" value="<?php echo $joinsiswa->jml_saudara;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $joinsiswa->email;?>" required>
                   </div>
                </div>

          </div><!--body-->
        </div><!--panel default-->
        <!--panel 2-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Bioada SMP</h3>
        </div><!--panel heading-->
          <div class="panel-body">
              <div class="form-group">
                  <label>Asal SMP</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="asal_smp" class="form-control" placeholder="Asal SMP" value="<?php echo $joinsiswa->asal_smp;?>" required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>NPSN SMP</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="npsn_smp" class="form-control" placeholder="NPSN SMP" value="<?php echo $joinsiswa->npsn_smp;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Alamat SMP</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="alamat_smp" class="form-control" placeholder="Alamat SMP" value="<?php echo $joinsiswa->alamat_smp;?>" required>
                   </div>
                </div>
               
                <div class="form-group">
                <label>Provinsi</label>
                <div class="input-group">
                <span class="input-group-addon">+</span>
                <select name="id_provinsi_smp" class="form-control" id="provinsi_smp">
                <option value="<?php echo $joinsiswa->id_provinsi_smp;?>"><?php echo $joinsiswa->nama_provinsi_smp;?></option>
                <?php foreach($provinsi_smp as $prov){
                 echo '<option value="'.$prov->id.'">'.$prov->nama_provinsi_smp.'</option>';
                } ?>
                </select>
                  </div>
                </div>
              <div class="form-group">
                <label>Kabupaten</label>
                <div class="input-group">
                <span class="input-group-addon">+</span>
              <select name="id_kabupaten_smp" class="form-control" id="kabupaten_smp">
              <option value='<?php echo $joinsiswa->id_kabupaten_smp;?>'><?php echo $joinsiswa->nama_kabupaten_smp;?></option>
              </select>
               </div>
                </div>
             <div class="form-group">
             <label>Kecamatan</label>
            <div class="input-group">
            <span class="input-group-addon">+</span>
              <select name="id_kecamatan_smp" class="form-control" id="kecamatan_smp">
              <option value="<?php echo $joinsiswa->id_kecamatan_smp;?>"><?php echo $joinsiswa->nama_kecamatan_smp;?></option>
              </select>
               </div>
                </div>
            <div class="form-group">
            <label>Desa</label>
            <div class="input-group">
            <span class="input-group-addon">+</span>
              <select name="id_desa_smp" class="form-control" id="desa_smp">
              <option value="<?php echo $joinsiswa->id_desa_smp;?>"><?php echo $joinsiswa->nama_desa_smp;?></option>
              </select>
               </div>
                </div>
                  <div class="form-group">
                  <label>Keterangan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="keterangan" required>
                          <option value="<?php echo $joinsiswa->keterangan;?>"><?php echo $joinsiswa->keterangan;?></option>
                         <option value="PIP">PIP</option>
                      <option value="KPS">KPS</option>
                         <option value="KMS">KMS</option>
                         <option value="KKS">KKS</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>No. KPS / KMS / PIP</label>
                  <p style="color:red;">Penerima Kartu Cerdas / KIP / KMS, Dll. </p>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="no_kps_kms" class="form-control" placeholder="No KPS KMS" value="<?php echo $joinsiswa->no_kps_kms;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="jurusan" required>
                      <option value="<?php echo $joinsiswa->jurusan;?>"><?php echo $joinsiswa->jurusan;?></option>
                         <option value="RPL">RPL</option>
                         <option value="TKJ">TKJ</option>
                         <option value="MM">MM</option>
                         <option value="AK">AK</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>NEM</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="nem" class="form-control" placeholder="NEM" value="<?php echo $joinsiswa->nem;?>" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>C1 Kota / Luar Kota / Dalam Kota</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="c1_kk" required>
                      <option value="<?php echo $joinsiswa->c1_kk;?>"><?php echo $joinsiswa->c1_kk;?></option>
                         <option value="Dalam Kota">Dalam Kota</option>
                         <option value="Luar Kota">Luar Kota</option>
                         <option value="Luar DIY">Luar DIY</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Biaya</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="biaya" required>
                      <option value="<?php echo $joinsiswa->biaya;?>"><?php echo $joinsiswa->biaya;?></option>
                         <option value="Belum">Belum</option>
                         <option value="Lunas">Lunas</option>
                     </select>
                   </div>
                </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
            </form>
          </div><!--body-->
        </div><!--panel default-->
  </div><!--kolom 2-->
  </div><!--row-->

</section>


