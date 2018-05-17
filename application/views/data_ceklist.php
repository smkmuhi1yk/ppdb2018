<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>

<style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
<div class="preloader">
      <div class="loading">
        <img src="<?php echo base_urL('assets/image/pacman.gif');?>" width="80">
        <p>Sabarrrrrr</p>
      </div>
    </div>

<section class="content-header">
  <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="col-sm-12">

    </div>
  </div>

  <h1>
    Master
    <small>Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Master Data</li>
    <li class="active">Data Ceklist</li>
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

              <table id="example1" class="table table-bordered table-striped" >
               <thead>
               <tr>
                 <th>No</th>
                 <th>NO daftar</th>
                 <th>Nama Siswa</th>
                 <th>Jurusan</th>
                 <th>SKHUN Asli</th>
                 <th>FC SKHUN</th>
                 <th>FC Ijazah</th>
                 <th>FC Akta</th>
                 <th>FC C1</th>
                 <th>Photo</th>
                 <th>SKL Asli</th>
                 <th>FC KMS KPS</th>
                 <th>Data Pribadi</th>
                 <th>FC Raport</th>
                 <th>FC Sertifikat</th>
                 <th>Keterangan</th>
             <th>Action</th>
               </tr>
               </thead>
               <tbody>
              <?php  $no = 1;
                      foreach ($ceklist as $u) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                                 
                   <td> <?php echo $u['no_daftar'];?>
                </td>
                  <td><?php echo $u['nama_cek'];?></td>
                  <td><?php echo $u['jurusan'];?></td>
                  <td><?php echo $u['skhun_asli'];?></td>
                  <td><?php echo $u['fc_skhun'];?></td>
                  <td><?php echo $u['fc_ijazah'];?></td>
                  <td><?php echo $u['fc_akta'];?></td>
                  <td><?php echo $u['fc_c1'];?></td>
                  <td><?php echo $u['photo'];?></td>
                  <td><?php echo $u['skl_asli'];?></td>
                  <td><?php echo $u['fc_kms_kps'];?></td>
                  <td><?php echo $u['data_pribadi'];?></td>
                  <td><?php echo $u['fc_raport'];?></td>
                  <td><?php echo $u['fc_sertifikat'];?></td>
                  <td><?php echo $u['keterangan'];?></td>
             
                  <td>

                   
                 
                       <a href="<?php echo base_urL('index.php/smas_controller/editceklist/').$u['id_ceklist'];?>"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</span></a>
                    <br>
                       <a onclick="javascript: return confirm('Are you sure you want to delete this data ?')" href="<?php echo base_urL('index.php/smas_controller/delceklist/').$u['id_ceklist'];?>"><span class="label label-danger" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</span></a>

                    
                  </td>
                </tr>
              <?php   } ?>
               </tbody>
               <tfoot>
               <tr>
                 <th>No</th>
                 <th>NO daftar</th>
                 <th>Nama Siswa</th>
                 <th>Jurusan</th>
                 <th>SKHUN Asli</th>
                 <th>FC SKHUN</th>
                 <th>FC Ijazah</th>
                 <th>FC Akta</th>
                 <th>FC C1</th>
                 <th>Photo</th>
                 <th>SKL Asli</th>
                 <th>FC KMS KPS</th>
                 <th>Data Pribadi</th>
                 <th>FC Raport</th>
                 <th>FC Sertifikat</th>
                 <th>Keterangan</th>
           
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


