  <section class="content-header">
  <h1>
    Master
    <small>Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Master Data</li>
    <li><a href="<?php echo base_url('index.php/smas_controller/user');?>">Data User</a></li>
    <li class="active">Edit User</li>
  </ol>
</section>
<section class="content">
     <div class="row">
       <div class="col-xs-6">

         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Nama Siswa</h3>
             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <form action="<?php echo base_urL('index.php/smas_controller/addpelanggar');?>" role="form" method="post">
               <div class="box-body">
                 <div class="form-group">
                    <label>ID User</label>
                   <div class="input-group">
                      <span class="input-group-addon">+</span>
                      <input type="number" name="nis_pelanggaran_siswa" class="form-control" placeholder="Enter NIP" value="<?php echo $siswa->nis_siswa;?>" required readonly>
                    </div>
                 </div>
                 <div class="form-group">
                  <label>Waktu Pelanggaran</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="date" name="waktu_melanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
               
                <div class="form-group">
                  <label>Tempat Melanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="tempat_pelanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
      
                <div class="form-group">
                  <label>Keterangan Pelanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <textarea name="keterangan_pelanggar" class="form-control" rows="3" placeholder="Enter your address...." required></textarea>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div> 

                <div class="form-group">
                    <label>ID User</label>
                   <div class="input-group">
                      <span class="input-group-addon">+</span>
                      <input type="number" name="nis_pelanggaran_siswa" class="form-control" placeholder="Enter NIP" value="<?php echo $siswa->nis_siswa;?>" required readonly>
                    </div>
                 </div>
                 <div class="form-group">
                  <label>Waktu Pelanggaran</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="date" name="waktu_melanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
               
                <div class="form-group">
                  <label>Tempat Melanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="tempat_pelanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
      
                <div class="form-group">
                  <label>Keterangan Pelanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <textarea name="keterangan_pelanggar" class="form-control" rows="3" placeholder="Enter your address...." required></textarea>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>                           
               <!-- /.box-body -->              
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
      <div class="row">
       <div class="col-xs-6">
         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Nama Ayah</h3>
             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
            
               <div class="box-body">
                 <div class="form-group">
                    <label>ID User</label>
                   <div class="input-group">
                      <span class="input-group-addon">+</span>
                      <input type="number" name="nis_pelanggaran_siswa" class="form-control" placeholder="Enter NIP" value="<?php echo $siswa->nis_siswa;?>" required readonly>
                    </div>
                 </div>
                 <div class="form-group">
                  <label>Waktu Pelanggaran</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="date" name="waktu_melanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
               
                <div class="form-group">
                  <label>Tempat Melanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="tempat_pelanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
      
                <div class="form-group">
                  <label>Keterangan Pelanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <textarea name="keterangan_pelanggar" class="form-control" rows="3" placeholder="Enter your address...." required></textarea>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>               
               <!-- /.box-body -->
               <div class="box-footer">
                 <button type="submit" class="btn btn-primary pull-right">Save Data</button>
               </div>
             </form>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>

   </section>
