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
    <li class="active">Input Ceklist</li>
  </ol>
</section>
<section class="content">
 <form action="<?php echo base_urL('index.php/smas_controller/addceklist');?>" role="form" method="post">
  <div class="row">
  <div class="col-md-6">
        <!--panel-->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Siswa</h3>
        </div><!--panel heading-->
          <div class="panel-body">
           
             <div class="form-group">
                  <label>No Daftar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input  type="number" name="no_daftar" class="form-control" placeholder="No Daftar" value="<?php echo $siswa->no_daftar;?>" readonly required>
                   </div>
                </div>
               
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text"  name="nama_cek" class="form-control" placeholder="Nama Lengkap Siswa" value="<?php echo $siswa->nm_siswa;?>" readonly>
                   </div>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text"  name="jurusan" class="form-control" placeholder="Jurusan" value="<?php echo $siswa->jurusan;?>" readonly>
                   </div>
                </div>
                 <div class="form-group">
                  <label>SKHUN Asli</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="skhun_asli" class="form-control" placeholder="SKHUN Asli"   required>
                   </div>
                </div>
               <div class="form-group">
                  <label>FC SKHUN</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="fc_skhun" class="form-control" placeholder="FC SKHUN"  required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>FC Ijazah</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="fc_ijazah" class="form-control" placeholder="FC Ijazah"  required>
                   </div>
                </div>
                  <div class="form-group">
                  <label>FC Akta</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="fc_akta" class="form-control" placeholder="FC Akta"  required>
                   </div>
                </div>
                    <div class="form-group">
                  <label>FC C1</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="fc_c1" class="form-control" placeholder="FC C1"  required>
                   </div>
                </div>
                  <div class="form-group">
                  <label>Photo</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="photo" class="form-control" placeholder="Photo"  required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>SKL Asli</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="skl_asli" class="form-control" placeholder="SKL Asli"  required>
                   </div>
                </div>
                <div class="form-group">
                  <label>FC KMS /KPS</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="fc_kms_kps" class="form-control" placeholder="FC KMS KPS" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Data Pribadi</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="data_pribadi" class="form-control" placeholder="Data Pribadi" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>FC Raport</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="fc_raport" class="form-control" placeholder="FC Raport"   required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>FC Sertifikat</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="fc_sertifikat" class="form-control" placeholder="FC Sertifikat"  required>
                   </div>
                </div>
                 <div class="form-group">
                  <label>Keterangan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                   </div>
                </div>
                
          </div><!--body-->
        </div><!--panel default-->
       
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
            </form>
          </div><!--body-->
        </div><!--panel default-->
  </div><!--kolom 2-->
  </div><!--row-->

</section>


