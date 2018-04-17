<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>
<section class="content-header">
  <h1>
    Master
    <small>Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/homesiswa');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Master Data</li>
    <li class="active">Data Siswa</li>
  </ol>
</section>
<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Daftar Pelanggar</h3> &nbsp &nbsp
            <!--
             <a href="" data-toggle="modal" data-target="#tambah_pelanggar"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Data</span></a>
            -->
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
                 <th>NISN</th>
                 <th>Nama</th>
                  <th>Kelas</th>
                 <th>Waktu Melanggar</th>
                 <th>Tempat Melanggar</th>
                 <th>Keterangan Pelanggar</th>
                 <th>Poin</th>
                 <th>Action</th>
                 
               </tr>
               </thead>
               <tbody>
              <?php  $no = 1;
                      foreach ($detailpelanggar as $u) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u['nis_pelanggaran_siswa'];?></td>
                  <td><?php echo $u['nama_siswa'];?></td>
                  <td><?php echo $u['kelas'];?></td>
                  <td><?php echo $u['waktu_melanggar'];?></td>
                  <td><?php echo $u['tempat_pelanggar'];?></td>
                  <td><?php echo $u['keterangan_pelanggar'];?></td>
                  <td><?php echo $u['poin'];?></td> 

                  <td>
                  <a onclick="javascript: return confirm('Are you sure you want to delete this data ?')" href="<?php echo base_urL('index.php/smas_controller/delsiswa/').$u['nis_siswa'];?>"><span class="label label-danger" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</span></a>
                </td>

          <!--      <td>
                  
                    <a href="<?php echo base_urL('index.php/smas_controller/editpelanggar/').$u['id_pelanggaran'];?>"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</span></a>
                   
                        

                       <a onclick="javascript: return confirm('Are you sure you want to delete this data ?')" href="<?php echo base_urL('index.php/smas_controller/delpelanggar/').$u['id_pelanggaran'];?>"><span class="label label-danger" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> View</span></a>

                 </td>-->
                </tr>
              <?php   } ?>
               </tbody>
               <tfoot>
               <tr>
                 <th>No</th>
                 <th>NISN</th>
                 <th>Nama</th>
                  <th>Kelas</th>
                 <th>Waktu Melanggar</th>
                 <th>Tempat Melanggar</th>
                 <th>Keterangan Pelanggar</th>
                 <th>Poin</th>
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



