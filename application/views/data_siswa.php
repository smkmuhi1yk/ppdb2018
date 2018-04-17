<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>
<section class="content-header">
  <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="col-sm-12">
      <a href="" class="btn btn-primary" >Export Excel </a>
    </div>
  </div>

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
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Input Data</th>
                 <th>No Daftar</th>
                 <th>Tanggal Daftar</th>
                 <th>NISN</th>
                 <th>Nama Siswa</th>
                 <th>JK</th>
                 <th>Jurusan</th>
                 <th>Keterangan</th>
                 <th>Biaya</th>
                
              
                 <th>Action</th>
               </tr>
               </thead>
               <tbody>
              <?php  $no = 1;
                      foreach ($siswa as $u) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u['nm_input'];?></td>
                 <td>
                  
                    <?php echo $u['no_daftar'];?>
                </td>
                  <td><?php echo $u['tgl_daftar'];?></td>
                  <td><?php echo $u['nisn'];?></td>
                  <td><?php echo $u['nm_siswa'];?></td>
                  <td><?php echo $u['jk_siswa'];?></td>
                  <td><?php echo $u['jurusan'];?></td>
                  <td><?php echo $u['keterangan'];?></td>
                  <td><?php echo $u['biaya'];?></td>
                  
                  
                  <td>
                    
               
                 
                       <a href="<?php echo base_urL('index.php/smas_controller/editsiswa/').$u['no_daftar'];?>"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</span></a>
                    
                       <a onclick="javascript: return confirm('Are you sure you want to delete this data ?')" href="<?php echo base_urL('index.php/smas_controller/delsiswa/').$u['no_daftar'];?>"><span class="label label-danger" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</span></a>

                    
                  </td>
                </tr>
              <?php   } ?>
               </tbody>
               <tfoot>
               <tr>
                 <th>No</th>
                 <th>Input Data</th>
                 <th>No Daftar</th>
                 <th>Tanggal Daftar</th>
                 <th>NISN</th>
                 <th>Nama Siswa</th>
                 <th>JK</th>
                 <th>Jurusan</th>
                 <th>Keterangan</th>
                 <th>Biaya</th>
           
                 <th>Action</th>
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

